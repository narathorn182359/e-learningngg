<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class SinkaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:adminpage']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = DB::table('menu_admin')->get();

        $data = array(
                      'menu' => $menu
        );
        return view('admin.sinka.sinka', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = DB::table('menu_admin')->get();

        $data = array(

                  'menu' => $menu,

                );
        return view('admin.sinka.addsinka', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('img_');
        DB::table('sinka')->insert(
            ['link' => $request->link,
             'type_' => $request->type_,
             'img_' => $file->getClientOriginalName(),
            ]
        );
        $file->move(public_path(). '/upload', $file->getClientOriginalName());
        return redirect('sinka');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = DB::table('menu_admin')->get();
        $sinka = DB::table('sinka')
        ->where('id',$id)
        ->first();
        $data = array(
                      'menu' => $menu,
                      'sinka' => $sinka
        );
        return view('admin.sinka.editsinka', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file=$request->file('img_');
        DB::table('sinka')
        ->where('id',$id)
        ->update(
            ['link' => $request->link,
             'type_' => $request->type_,
             'img_' => $file->getClientOriginalName(),
            ]
        );
        $file->move(public_path(). '/upload', $file->getClientOriginalName());
        return redirect('sinka');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sinka')->where('id', $id)->delete();
        return response()->json(['error' => false,], 200);
    }
}

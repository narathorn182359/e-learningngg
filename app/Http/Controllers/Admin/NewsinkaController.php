<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class NewsinkaController extends Controller
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
        return view('admin.newsinka.newsinka', $data);
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
                      'menu' => $menu
        );
        return view('admin.newsinka.addnewsinka', $data);
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
        DB::table('newsinka')->insert(
            ['name_' => $request->name_,
             'des_' => $request->des_,
             'img_' => $file->getClientOriginalName(),
             'status' => true,
             'type_' =>"-"
            ]
        );
        $file->move(public_path(). '/upload', $file->getClientOriginalName());
        return redirect('newsinka');




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

        $newsinka = DB::table('newsinka')
        ->where('id',$id)
        ->first();
        $data = array(
                      'menu' => $menu,
                      'newsinka' => $newsinka
        );
        return view('admin.newsinka.editnewsinka', $data);
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
        DB::table('newsinka')
        ->where('id',$id)
        ->update(
            ['name_' => $request->name_,
             'des_' => $request->des_,
             'img_' => $file->getClientOriginalName(),
             'status' => true,
             'type_' =>"-"
            ]
        );
        $file->move(public_path(). '/upload', $file->getClientOriginalName());
        return redirect('newsinka');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('newsinka')->where('id', $id)->delete();
        return response()->json(['error' => false,], 200);
    }
}
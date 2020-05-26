<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class YoutubeController extends Controller
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
        return view('admin.youtube.youtube', $data);
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
        return view('admin.youtube.addyoutube', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('_youtube')->insert(
            ['linkyoutube' => $request->linkyoutube,
            ]
        );

        return redirect('youtube');
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
        $youtube =  DB::table('_youtube')
        ->where('id',$id)
        ->first();
        $data = array(
                      'menu' => $menu,
                     'youtube' =>  $youtube
        );
        return view('admin.youtube.edityoutube', $data);
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
        DB::table('_youtube')
        ->where('id',$id)
        ->update(
            [
                'linkyoutube' => $request->linkyoutube,
            ]
        );

        return redirect('youtube');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_youtube')->where('id',$id)->delete();
        return response()->json(['error' => false,], 200);

    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class SubcategoryController extends Controller
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
        return view('admin.subcategory.subcategory', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('category')->get();
        $menu = DB::table('menu_admin')->get();

        $data = array(
            'menu' => $menu,
            'category' => $category
            );
        return view('admin.subcategory.addsubcategory', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('subcategory')
        ->insert(
            ['name_' => $request->name_,
            'des_' => $request->des_,
            'catsub' => $request->catsub
            ]
        );

        return redirect('subcategory');
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
        $category = DB::table('category')->get();
        $menu = DB::table('menu_admin')->get();
        $subcategory = DB::table('subcategory')
        ->where('id',$id)
        ->first();
        $data = array(
            'menu' => $menu,
            'category' => $category,
            'subcategory' => $subcategory
            );
        return view('admin.subcategory.editsubcategory', $data);
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



        DB::table('subcategory')
        ->where('id',$id)
        ->update(
            ['name_' => $request->name_,
            'des_' => $request->des_,
            'catsub' => $request->catsub
            ]
        );

        return redirect('subcategory');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('subcategory')->where('id', $id)->delete();
        return response()->json(['error' => false,], 200);
    }
}

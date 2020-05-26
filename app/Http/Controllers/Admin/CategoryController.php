<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
        return view('admin.category.category', $data);
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
        return view('admin.category.addcategory', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('category')->insert(
            ['name_' => $request->name_,
            'des_' => $request->des_
            ]
        );

        return redirect('category');
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
        $category = DB::table('category')->where('id',$id)->first();
        $data = array(
         'menu' => $menu,
        'category'=> $category
        );
        return view('admin.category.editcategory', $data);

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


        DB::table('category')
        ->where('id',$id)
        ->update(
            ['name_' => $request->name_,
            'des_' => $request->des_
            ]
        );

        return redirect('category');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('category')->where('id', $id)->delete();
        return response()->json(['error' => false,], 200);
    }
}

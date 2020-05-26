<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
class ProducController extends Controller
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
        return view('admin.product.produc', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = DB::table('menu_admin')->get();
        $subcategory = DB::table('subcategory')->get();
        $category = DB::table('category')->get();
        $data = array(
                      'menu' => $menu,
                      'subcategory' => $subcategory,
                      'category' => $category
        );
        return view('admin.product.addproduc', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image =$request->img_;
        list($type, $image) = explode(';',$image);
        list(, $image) = explode(',',$image);
        $image = base64_decode($image);
        $image_name = time().'.png';
        DB::table('product')->insert(
            ['name_' => $request->name_,
             'des_' => $request->des_,
             'img_' =>  $image_name,
             'code_' => $request->code_,
             'paped' => $request->paped,
             'mm' => $request->mm,
            ]
        );
        file_put_contents('upload/'.$image_name, $image);



        return redirect('produc');
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
        $subcategory = DB::table('subcategory')->get();
        $category = DB::table('category')->get();
        $product = DB::table('product')
        ->where('id',$id)
        ->first();
        $data = array(
                      'menu' => $menu,
                      'subcategory' => $subcategory,
                      'category' => $category,
                      'product' => $product
        );
        return view('admin.product.editproduc', $data);







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
        if($file != ""){
            $image =$request->img;
        list($type, $image) = explode(';',$image);
        list(, $image) = explode(',',$image);
        $image = base64_decode($image);
        $image_name = time().'.png';
        DB::table('product')->insert(
            ['name_' => $request->name_,
             'des_' => $request->des_,
             'img_' =>  $image_name,
             'code_' => $request->code_,
             'paped' => $request->paped,
             'mm' => $request->mm,
            ]
        );
        file_put_contents('upload/'.$image_name, $image);
        }
        else
        {
            DB::table('product')  ->where('id',$id)
            ->update(
                ['name_' => $request->name_,
                 'des_' => $request->des_,
                 'code_' => $request->code_,
                 'paped' => $request->paped,
                 'mm' => $request->mm,
                ]
            );
        }

        return redirect('produc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('product')->where('id', $id)->delete();
        return response()->json(['error' => false,], 200);
    }
}

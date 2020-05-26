<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function product()
    {
        $product = DB::table('product')->get();
        return response()->json($product);

    }

    public function category()
    {
        $category = DB::table('category')->get();
        return response()->json($category);

    }


    public function subcategory()
    {
        $subcategory = DB::table('subcategory')->get();
        return response()->json($subcategory);

    }


    public function article()
    {
        $article = DB::table('article')->get();
        return response()->json($article);

    }


    public function sinka()
    {
        $sinka = DB::table('sinka')->get();
        return response()->json($sinka);

    }

    public function newsinka()
    {
        $newsinka = DB::table('newsinka')->get();
        return response()->json($newsinka);

    }

    public function job()
    {
        $job = DB::table('job')->get();
        return response()->json($job);

    }



    public function emppp()
    {
        $emppp = DB::table('employee')->get();
        return response()->json($emppp);

    }


    public function youtube()
    {
        $youtube = DB::table('_youtube')->get();
        return response()->json($youtube);

    }


    public function get_learning($id)
    {
        $set_learnning = DB::table('set_learnning')
        ->join('position', 'set_learnning.id_position', '=', 'position.id')
        ->where('id_vichar',$id)
        ->get();
        return response()->json($set_learnning);

    }


}

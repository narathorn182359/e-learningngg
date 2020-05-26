<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LearningOnlineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $user_id = Auth::user();

        $employee = DB::table('employee')
        ->where('emp_id', $user_id->username)
        ->first();


        $position_id = DB::table('position')
        ->where('name_posi',$employee->position)
        ->first();


       $vichar = DB::table('product')->get();


        $score = DB::table('test_ans')
                ->where('question', "1")
                ->orderBy('id', 'desc')
                ->where('codd_staff', Auth::user()->username)
                ->get();

                $vichar_brand = DB::table('set_brand_learnning')
                ->where('brand',  $employee->brand)
                ->where('id_position_b', $position_id->id)
                ->get();


foreach($vichar as $vichars){
    foreach($vichar_brand as $vichar_brands){
      if($vichars->id == $vichar_brands->id_vichar_b ){
        $data_f = array(
            'id' => $vichars->id,
            'code_' => $vichars->code_,
            'paped' => $vichars->paped,
            'name_vichar' => $vichars->name_,
            );
            $insert_schedule[]= $data_f;
      }
    }
  }









        $data = array(
            'employee' => $employee,
            'vichar' => $insert_schedule,
              'score'       =>  $score
           );


         return View('el.profile',$data);
    }





    public function learningOnline()
    {


        $user_id = Auth::user();

        $employee = DB::table('employee')
        ->where('emp_id', $user_id->username)
        ->first();


        $position_id = DB::table('position')
        ->where('name_posi',$employee->position)
        ->first();


             $vichar = DB::table('set_learnning')
            ->leftJoin('product', 'set_learnning.id_vichar', '=', 'product.id')
            ->where('id_position', $position_id->id)
            ->get();




        $data = array(
            'employee' => $employee,
            'vicha' => $vichar
           );




        return View('el.learningOnline',$data);
    }




    public function  learningcorse($id){




        $product = DB::table('product')
        ->where('id', $id)
        ->first();



        $data = array(
            'product' => $product,

           );



        return View('el.learningCorse', $data);
    }





    public function  showtest($id){


        $test = DB::table('test')
        ->where('vichar', $id)
        ->get();

        $data = array(
            'test' => $test,

           );
        return View('el.showetest',$data);

    }





    public function  showtestdata(Request $request){


        $sum = 0;
        $i =1;
        $vichar =$request->vichar;
        $choice1 = $request->choice1;
        $choice2 = $request->choice2;
        $choice3 = $request->choice3;
        $choice4 = $request->choice4;
        $choice5 = $request->choice5;
        $choice6 = $request->choice6;
        $choice7 = $request->choice7;
        $choice8 = $request->choice8;
        $choice9 = $request->choice9;
        $choice10 = $request->choice10;


        $data = array(

            '1' => $choice1[0],
            '2' => $choice2[0],
            '3' => $choice3[0],
            '4' => $choice4[0],
            '5' => $choice5[0],
            '6' => $choice6[0],
            '7' => $choice7[0],
            '8' => $choice8[0],
            '9' => $choice9[0],
            '10' => $choice10[0],

        );

  
       $check = DB::table('test')
       ->where('vichar',$vichar)
       ->get();

     foreach($check as $checks)
     {

     if(  $checks->answer == $data[$i]){
        $sum++;
       }
             $i++;

    }


if($sum >= 8){
    DB::table('test_ans')->insert([
        'vichar' =>  $vichar,
        'codd_staff' =>Auth::user()->username,
        'score' => $sum,
        'full_score' =>$i-1,
        'question' =>'1'
    ]);
}else{
    DB::table('test_ans')->insert([
        'vichar' =>  $vichar,
        'codd_staff' =>Auth::user()->username,
        'score' => $sum,
        'full_score' =>$i-1,
        'question' =>'0'
    ]);
}







return redirect('profile');





    }






    public function  article_l($id){
        $article = DB::table('article')
        ->where('id', $id)
        ->first();

        $data = array(
            'article' => $article,

           );


        return View('el.article',$data);



    }






}

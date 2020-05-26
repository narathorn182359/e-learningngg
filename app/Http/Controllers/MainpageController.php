<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class MainpageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }




    public function knowledge()
    {

        $product_1 = DB::table('article')
        ->where('type_','คลังความรู้')
        ->get();

        $product_2 = DB::table('article')
        ->where('type_','ความเชื่อ/การดูแลรักษา')
        ->get();

        $product_3 = DB::table('article')
        ->where('type_','เกร็ดความรู้')
        ->get();

        $sinka_3 = DB::table('sinka')
        ->where('id', '4')
        ->first();


        $data =  array(

            'product_1' =>$product_1,
            'product_2' =>$product_2,
            'product_3'  =>$product_3,
            'product_3' => $product_3,
            'sinka_3' => $sinka_3
        );

        return view('el.knowledge',$data);
    }






    public function detailknowledge($id)
    {


        $product = DB::table('product')
        ->where('id',$id)
        ->first();

        $data =  array(
            'product' =>$product,
        );

        return view('el.detailproduct',$data);


    }




    public function product()
    {

        $sinka_3 = DB::table('sinka')
        ->where('id', '2')
        ->first();

        $newsinka = DB::table('newsinka')
        ->Where('status','1')
        ->orderBy('id', 'desc')
        ->get();

        $data =  array(
            'sinka_3' =>$sinka_3,
            'newsinka' =>$newsinka
        );

        return view('el.product',$data);
    }



    public function detailsinka($id)
    {


        $newsinka = DB::table('newsinka')
        ->where('id',$id)
        ->first();

        $data =  array(
            'newsinka' =>$newsinka,
        );

        return view('el.detailsinka',$data);


    }



    public function activity()
    {


        $sinka_3 = DB::table('sinka')
        ->where('id', '3')
        ->first();
        $data =  array(
            'sinka_3' =>$sinka_3,
        );

        return view('el.activity',$data);
    }




    public function contact()
    {



        $sinka_3 = DB::table('sinka')
        ->where('id', '1')
        ->first();
        $data =  array(
            'sinka_3' =>$sinka_3,
        );





        return view('el.contact',$data);
    }




    public function add_brand($id,$idd)
    {

        $menu = DB::table('menu_admin')->get();
        $brand = DB::table('employee')->select('brand')->get();

        $a=array();
        foreach($brand as  $i){
            array_push($a, $i->brand);
        }

        $brand_r   = array_unique( $a );
        $array = $a;
        $unique = array();
        foreach($array as $v){
          isset($k[$v]) || ($k[$v]=1) && $unique[] = $v;
          }
          //dd($unique);
          $i=0;
          $brand_check = DB::table('set_brand_learnning')->get();
             foreach($unique as $item)
             {
                $get_data = DB::table('set_brand_learnning')
                ->where('id_vichar_b',$idd)
                ->where('id_position_b', $id)
                ->where('brand',$unique[$i])
                ->first();
                if(isset($get_data)){
                    $data_f = array(
                        'id_set_brand' => $get_data->id_set_brand,
                        'id_vichar_b' => $get_data->id_vichar_b,
                        'id_position_b'=>  $get_data->id_position_b,
                        'brand' =>  $get_data->brand,
                        'checked' =>  $get_data->checked,

                        );

                 }else{
                   $data_f = array(
                    'id_set_brand' => '',
                    'id_vichar_b' => '',
                    'id_position_b'=>  '',
                    'brand' =>  $item,
                    'checked' =>  '',

                    );

                }
                $i++;
                $insert_schedule[]= $data_f;
             }






if(isset($insert_schedule)){
    $data =  array(
        'menu'  =>   $menu,
        'brand_r2' =>   $insert_schedule,
        'id'   => $id,
        'idd' => $idd
    );



   }else{
    $data =  array(
        'menu'  =>   $menu,
        'brand_r' =>   $unique,
        'id'   => $id,
        'idd' => $idd
    );

   }







        return view('admin.setbrand',$data);

    }







    public function save_brand_set(Request $request)
    {

        $brand = $request->brand;

        for($count = 0; $count < collect($brand)->count(); $count++)
             {

                DB::table('set_brand_learnning')->where('id_vichar_b',$request->id_vichar)->delete();


              $data = array(
            'brand' => $brand[$count],
            'id_position_b' => $request->id_position,
            'id_vichar_b' => $request->id_vichar,
            'checked'=> 'checked',
            'status' => true
          );

                 $insert_schedule[] = $data;
               }
             if(isset($insert_schedule)){
                DB::table('set_brand_learnning')->insert(
                    $insert_schedule
                );
               }else{
                DB::table('set_brand_learnning')->where('id_vichar_b',$request->id_vichar)->delete();
               }




        return redirect('set_brand/'.$request->id_position.'/'.$request->id_vichar);
    }


    public function get_score_test($id){

        $user_id = Auth::user();

        $vichar  = DB::table('product')
        ->where('id',$id)
        ->select('name_')
        ->first();

       $score  = DB::table('test_ans')
        ->where('codd_staff',$user_id->username)
        ->where('vichar',$id)
        ->get();


     return response()->json(['name' => $vichar, 'score' =>  $score ]);



    }


}

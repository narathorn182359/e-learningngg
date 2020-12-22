<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class GroupLearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $posi = $request->position;

        for($count = 0; $count < collect($posi)->count(); $count++)
             {

                DB::table('set_learnning')->where('id_vichar',$request->id_vichar)->delete();


              $data = array(
            'id_position' => $posi[$count],
            'id_vichar' => $request->id_vichar,
            'checked'=> 'checked',
            'status' => true
          );

                 $insert_schedule[] = $data;
               }


               if(isset($insert_schedule)){
                DB::table('set_learnning')->insert(
                    $insert_schedule
                );
               }else{
                DB::table('set_learnning')->where('id_vichar',$request->id_vichar)->delete();
               }



            return redirect('grouplear/'.$request->id_vichar);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $i = 0;      
    
        $menu = DB::table('menu_admin')->get();
        
        $product = DB::table('product')
        ->where('id',$id)
        ->first();

        $position = DB::table('position')
        ->leftJoin('set_learnning', 'position.id', '=', 'set_learnning.id_position')
        ->where('id_vichar',$id)
        ->get();

        $position_count = DB::table('position')
        ->leftJoin('set_learnning', 'position.id', '=', 'set_learnning.id_position')
        ->where('id_vichar',$id)
        ->count();


        $position_2 = DB::table('position')->get();



        foreach($position_2 as $item){

                     $get_data = DB::table('set_learnning')
                     ->where('id_vichar',$id)
                     ->where('id_position', $item->id)
                     ->first();

                     if(isset($get_data)){
                        $data_f = array(
                            'id' => $item->id,
                            'name_posi' => $item->name_posi,
                            'id_vichar'=>  $get_data->id_vichar,
                            'id_position' =>  $get_data->id_position,
                            'checked' =>  $get_data->checked,
                            'created_at'=> $item->created_at,
                            'updated_at' => $item->updated_at
                            );

                     }else{
                       $data_f = array(
                        'id' => $item->id,
                        'name_posi' => $item->name_posi,
                        'id_vichar'=> '-',
                        'id_position' => '-',
                        'checked' => '',
                        'created_at'=> $item->created_at,
                        'updated_at' => $item->updated_at
                        );

                 }






                    $insert_schedule[]= $data_f;

                   }

                   if(isset($insert_schedule)){
                    $data = array(
                        'menu' => $menu,
                        'product' => $product,
                        'position' => $insert_schedule,

          );
                   }else{
                    $data = array(
                        'menu' => $menu,
                        'product' => $product,
                        'position_2' => $position_2,

          );
                   }

                  // dd($insert_schedule);

               /*     $sNewCars = array_map("unserialize",array_unique(array_map("serialize",$insert_schedule)));
 */
                   //dd($sNewCars);


        return view('admin.grouplear.add', $data);
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
        $product = DB::table('product')
        ->where('id',$id)
        ->first();
        $data = array(
                      'menu' => $menu,
                      'product' => $product
        );
        return view('admin.grouplear.index', $data);


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class SettestController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $question = $request->question;
        $ch1 = $request->ch1;
        $ch2 = $request->ch2;
        $ch3 = $request->ch3;
        $ch4 = $request->ch4;
        $aw = $request->aw;


        for($count = 0; $count < collect($question)->count(); $count++)
         {
            DB::table('test')->where('vichar',$request->id_vichar)->delete();
            $data = array(
            'vichar' => $request->id_vichar,
            'question' => $question[$count],
            'choice1'  => $ch1[$count],
            'choice2'  => $ch2[$count],
            'choice3'  => $ch3[$count],
            'choice4'  => $ch4[$count],
            'answer'  => $aw[$count],
          );

                $insert_schedule[] = $data;
          }

          if(isset($insert_schedule)){
            DB::table('test')->insert(
                $insert_schedule
            );
           }else{
            DB::table('test')->where('vichar',$request->id_vichar)->delete();
           }

           return redirect('settest/'.$request->id_vichar.'/edit');
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
        $test = DB::table('test')
        ->where('vichar',$id)
        ->get();
        $data = array(
                      'menu' => $menu,
                      'id'   => $id,
                      'test' => $test
        );


        return view("admin.testset.index", $data);
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

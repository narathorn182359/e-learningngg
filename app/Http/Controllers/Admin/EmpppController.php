<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class EmpppController extends Controller
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
        return view('admin.emppp.emppp', $data);
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
                      'menu' => $menu,

                );
        return view('admin.emppp.addemppp', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('pic');
        DB::table('employee')->insert(
            ['emp_id' => $request->emp_id,
             'emp_idcard' => $request->emp_idcard,
             'name_title' => $request->name_title,
             'name' => $request->name,
             'last_name' => $request->last_name,
             'department' => $request->department,
             'position' => $request->position,
             'start_work' => $request->start_work,
             'company' => $request->company,
             'pic' => $file->getClientOriginalName(),
            ]
        );
        $file->move(public_path(). '/img', $file->getClientOriginalName());
        return redirect('emppp');
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

        $employee = DB::table('employee')
        ->where('id',$id)
        ->first();
        $data = array(
                      'menu' => $menu,
                      'employee' => $employee
        );
        return view('admin.emppp.editemppp', $data);
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
        $file=$request->file('pic');
        DB::table('employee')
        ->where('id',$id)
        ->update(
            ['emp_id' => $request->emp_id,
             'emp_idcard' => $request->emp_idcard,
             'name_title' => $request->name_title,
             'name' => $request->name,
             'last_name' => $request->last_name,
             'department' => $request->department,
             'position' => $request->position,
             'start_work' => $request->start_work,
             'company' => $request->company,
             'pic' => $file->getClientOriginalName(),
            ]
        );
        $file->move(public_path(). '/img', $file->getClientOriginalName());
        return redirect('emppp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('employee')->where('id', $id)->delete();
        return response()->json(['error' => false,], 200);
    }
}

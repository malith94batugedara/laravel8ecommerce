<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeFormRequest;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeFormRequest $request)
    {
        $data = $request->validated();

        $employee = new Employee;

        $employee->name=$data['empname'];
        $employee->address=$data['empadd'];
        $employee->reg_no=$data['empreg'];
        $employee->etf_no=$data['empetf'];

        $employee->dob=$request->empdob;

        $employee->age=$data['empage'];

        $employee->department=$request->empdep;

        if($request->hasfile('empimage')){
             $file=$request->file('empimage');
             $filename=time().'.'.$file->getClientOriginalExtension();
             $file->move('uploads/employee/',$filename);
             $employee->profile_pic=$filename;
        }
       
        $employee->save();

        return redirect(route('employee.index'))->with('message','Employee Added Successfully');
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
        //
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

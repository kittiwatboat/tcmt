<?php

namespace App\Http\Controllers\Setdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setdata\TB_Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data_list=TB_Employee::get(); //เชื่อมฐานข้อมูล
        return view('admin.employee.index',[
            'data_list'=>$data_list
        ]);
    }
    public function create(Request $request){
        $employee=new TB_Employee;
        $employee->image = $request->image;
        $employee->prefix_name = $request->prefix_name;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->employee_ID = $request->employee_ID;
        $employee->scan_code = $request->scan_code;
        $employee->bank = $request->bank;
        $employee->bank_No = $request->bank_No;
        $employee->save();
        return redirect('/Employee')->with('save_success','ทำการบันทึกสำเร็จ');
    }
}

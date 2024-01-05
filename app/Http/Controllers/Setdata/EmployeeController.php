<?php

namespace App\Http\Controllers\Setdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setdata\TB_Employee;

class EmployeeController extends Controller
{
    public function index(Request $request){
        //show = จำนวนรายชื่อที่จะแสดงใน 1 หน้า
        if($request->show == null){
            //ถ้า show = null แสดงแค่ 10
            if(!empty($request->search)){
            $data_list=TB_Employee::where('prefix_name','like','%'.$request->search.'%')
            ->orwhere('first_name','like','%'.$request->search.'%')
            ->orwhere('last_name','like','%'.$request->search.'%')
            ->paginate(10);
            }else{
            $data_list=TB_Employee::paginate(10);
            }
        }else{
            //ถ้า show != null แสดงตามจำนวนที่ส่งเข้ามา
            if(!empty($request->search)){
            $data_list=TB_Employee::where('prefix_name','like','%'.$request->search.'%')
            ->orwhere('first_name','like','%'.$request->search.'%')
            ->orwhere('last_name','like','%'.$request->search.'%')
            ->paginate($request->show);
            }else{
            $data_list=TB_Employee::paginate($request->show);
            }
        }
        return view('admin.employee.index',[
            'data_list'=>$data_list,
            'show'=>$request->show,
            'search'=>$request->search
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
        $employee->rate = $request->rate;
        $employee->save();
        return redirect('/Employee')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function update(Request $request){
        $employee=TB_Employee::find($request->id);
        $employee->image = $request->image;
        $employee->prefix_name = $request->prefix_name;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->employee_ID = $request->employee_ID;
        $employee->scan_code = $request->scan_code;
        $employee->bank = $request->bank;
        $employee->bank_No = $request->bank_No;
        $employee->rate = $request->rate;
        $employee->save();
        return redirect('/Employee')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function delete($id){
        $del_data=TB_Employee::destroy($id);
        return redirect()->back()->with('save_success','ลบข้อมูลเรียบร้อย');
    }
}

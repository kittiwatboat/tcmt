<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dataemployee\TB_Dataemployee;

class DataController extends Controller
{
    public function index(Request $request){
        //show = จำนวนรายชื่อที่จะแสดงใน 1 หน้า
        if($request->show == null){
            //ถ้า show = null แสดงแค่ 10
            if(!empty($request->search)){
            $data_list=TB_Dataemployee::where('prefix_name','like','%'.$request->search.'%')
            ->orwhere('first_name','like','%'.$request->search.'%')
            ->orwhere('last_name','like','%'.$request->search.'%')
            ->paginate(10);
            }else{
            $data_list=TB_Dataemployee::paginate(10);
            }
        }else{
            //ถ้า show != null แสดงตามจำนวนที่ส่งเข้ามา
            if(!empty($request->search)){
            $data_list=TB_Dataemployee::where('prefix_name','like','%'.$request->search.'%')
            ->orwhere('first_name','like','%'.$request->search.'%')
            ->orwhere('last_name','like','%'.$request->search.'%')
            ->paginate($request->show);
            }else{
            $data_list=TB_Dataemployee::paginate($request->show);
            }
        }
        return view('admin.dataemployee.index',[
            'data_list'=>$data_list,
            'show'=>$request->show,
            'search'=>$request->search
        ]);
    }
    public function create(Request $request){
        $dataemployee=new TB_Dataemployee;
        $dataemployee->date = $request->date;                                                 //วันที่
        $dataemployee->image = $request->image;                                               //รูปพนักงาน
        $dataemployee->prefix_name = $request->prefix_name;                                   //คำนำหน้าชื่อ
        $dataemployee->first_name = $request->first_name;                                     //ชื่อ
        $dataemployee->last_name = $request->last_name;                                       //นามสกุล
        $dataemployee->address = $request->address;                                           //ที่อยู่
        $dataemployee->employee_ID = $request->employee_ID;                                   //รหัสพนักงาน
        $dataemployee->scan_code = $request->scan_code;                                       //รหัสสแกนนิ้ว
        $dataemployee->bank = $request->bank;                                                 //ธนาคาร
        $dataemployee->bank_No = $request->bank_No;                                           //เลขบัญชี
        $dataemployee->rate = $request->rate;                                                 //เรทค่าแรงต่อชั่วโมง
        $dataemployee->job_No = $request->job_No;
        $dataemployee->WO_No = $request->WO_No;
        $dataemployee->enter_period = $request->enter_period;                                 //ช่วงกะเข้า
        $dataemployee->leave_period = $request->leave_period;                                 //ช่วงกะออก
        $dataemployee->enter_real = $request->enter_real;                                     //เข้ากะจริง
        $dataemployee->leave_real = $request->leave_real;                                     //ออกกะจริง
        $dataemployee->ot = $request->ot;                                                     //โอที
        $dataemployee->Midday_break = $request->Midday_break;                                 //ผ่าเที่ยง
        $dataemployee->confined_space = $request->confined_space;                             //ที่อับอากาศ
        $dataemployee->On_shift = $request->On_shift;                                         //เข้ากะ
        $dataemployee->special = $request->special;                                           //พิเศษ
        $dataemployee->allowance = $request->allowance;                                       //เบี้ยเลี้ยง
        $dataemployee->allowance_special = $request->allowance_special;                       //เบี้ยเลี้ยงพิเศษ
        $dataemployee->car_fare = $request->car_fare;                                         //ค่ารถ
        $dataemployee->tax = $request->tax;                                                   //ภาษี
        $dataemployee->Residual_wages = $request->Residual_wages;                             //ค่าแรงตกค้าง
        $dataemployee->social_security = $request->social_security;                           //ประกันสังคม
        $dataemployee->advance_payment = $request->advance_payment;                           //เบิกล่วงหน้า
        $dataemployee->deduction_advance_payment = $request->deduction_advance_payment;       //หักเบิกล่วงหน้า
        $dataemployee->extra_wages = $request->extra_wages;                                   //ค่าจ้างพิเศษ
        $dataemployee->save();
        return redirect('/Data')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function update(Request $request){
        $dataemployee=TB_Dataemployee::find($request->id);
        $dataemployee->date = $request->date;                                                 //วันที่
        $dataemployee->image = $request->image;                                               //รูปพนักงาน
        $dataemployee->prefix_name = $request->prefix_name;                                   //คำนำหน้าชื่อ
        $dataemployee->first_name = $request->first_name;                                     //ชื่อ
        $dataemployee->last_name = $request->last_name;                                       //นามสกุล
        $dataemployee->address = $request->address;                                           //ที่อยู่
        $dataemployee->employee_ID = $request->employee_ID;                                   //รหัสพนักงาน
        $dataemployee->scan_code = $request->scan_code;                                       //รหัสสแกนนิ้ว
        $dataemployee->bank = $request->bank;                                                 //ธนาคาร
        $dataemployee->bank_No = $request->bank_No;                                           //เลขบัญชี
        $dataemployee->rate = $request->rate;                                                 //เรทค่าแรงต่อชั่วโมง
        $dataemployee->job_No = $request->job_No;
        $dataemployee->WO_No = $request->WO_No;
        $dataemployee->enter_period = $request->enter_period;                                 //ช่วงกะเข้า
        $dataemployee->leave_period = $request->leave_period;                                 //ช่วงกะออก
        $dataemployee->enter_real = $request->enter_real;                                     //เข้ากะจริง
        $dataemployee->leave_real = $request->leave_real;                                     //ออกกะจริง
        $dataemployee->ot = $request->ot;                                                     //โอที
        $dataemployee->Midday_break = $request->Midday_break;                                 //ผ่าเที่ยง
        $dataemployee->confined_space = $request->confined_space;                             //ที่อับอากาศ
        $dataemployee->On_shift = $request->On_shift;                                         //เข้ากะ
        $dataemployee->special = $request->special;                                           //พิเศษ
        $dataemployee->allowance = $request->allowance;                                       //เบี้ยเลี้ยง
        $dataemployee->allowance_special = $request->allowance_special;                       //เบี้ยเลี้ยงพิเศษ
        $dataemployee->car_fare = $request->car_fare;                                         //ค่ารถ
        $dataemployee->tax = $request->tax;                                                   //ภาษี
        $dataemployee->Residual_wages = $request->Residual_wages;                             //ค่าแรงตกค้าง
        $dataemployee->social_security = $request->social_security;                           //ประกันสังคม
        $dataemployee->advance_payment = $request->advance_payment;                           //เบิกล่วงหน้า
        $dataemployee->deduction_advance_payment = $request->deduction_advance_payment;       //หักเบิกล่วงหน้า
        $dataemployee->extra_wages = $request->extra_wages;                                   //ค่าจ้างพิเศษ
        $dataemployee->save();
        return redirect('/Data')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function delete($id){
        $del_data=TB_Dataemployee::destroy($id);
        return redirect()->back()->with('save_success','ลบข้อมูลเรียบร้อย');
    }
}

<?php

namespace App\Http\Controllers\Setdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setdata\TB_Period;

class PeriodController extends Controller
{
    public function index(Request $request){
        //show = จำนวนรายชื่อที่จะแสดงใน 1 หน้า
        if($request->show == null){
            //ถ้า show = null แสดงแค่ 10
            if(!empty($request->search)){
            $data_list=TB_Period::where('entertime','like','%'.$request->search.'%')
            ->orwhere('leavetime','like','%'.$request->search.'%')
            ->paginate(10);
            }else{
            $data_list=TB_Period::paginate(10);
            }
        }else{
            //ถ้า show != null แสดงตามจำนวนที่ส่งเข้ามา
            if(!empty($request->search)){
            $data_list=TB_Period::where('entertime','like','%'.$request->search.'%')
            ->orwhere('leavetime','like','%'.$request->search.'%')
            ->paginate($request->show);
            }else{
            $data_list=TB_Period::paginate($request->show);
            }
        }
        return view('admin.period.index',[
            'data_list'=>$data_list,
            'show'=>$request->show,
            'search'=>$request->search
        ]);
    }
    public function create(Request $request){
        $period=new TB_Period;
        $period->entertime = $request->entertime;
        $period->leavetime = $request->leavetime;
        $period->save();
        return redirect('/Period')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function update(Request $request){
        $period=TB_Period::find($request->id);
        $period->entertime = $request->entertime;
        $period->leavetime = $request->leavetime;
        $period->save();
        return redirect('/Period')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function delete($id){
        $del_data=TB_Period::destroy($id);
        return redirect()->back()->with('save_success','ลบข้อมูลเรียบร้อย');
    }
}

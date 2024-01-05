<?php

namespace App\Http\Controllers\Setdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setdata\TB_Company;

class CompanyController extends Controller
{
    public function index(Request $request){
        //show = จำนวนรายชื่อที่จะแสดงใน 1 หน้า
        if($request->show == null){
            //ถ้า show = null แสดงแค่ 10
            if(!empty($request->search)){
            $data_list=TB_Company::where('name','like','%'.$request->search.'%')
            ->orwhere('companyaddressthai','like','%'.$request->search.'%')
            ->paginate(10);
            }else{
            $data_list=TB_Company::paginate(10);
            }
        }else{
            //ถ้า show != null แสดงตามจำนวนที่ส่งเข้ามา
            if(!empty($request->search)){
            $data_list=TB_Company::where('name','like','%'.$request->search.'%')
            ->orwhere('companyaddressthai','like','%'.$request->search.'%')
            ->paginate($request->show);
            }else{
            $data_list=TB_Company::paginate($request->show);
            }
        }
        return view('admin.company.index',[
            'data_list'=>$data_list,
            'show'=>$request->show,
            'search'=>$request->search
        ]);
        // $data_list=TB_Company::get(); //เชื่อมฐานข้อมูล
        // return view('admin.company.index',[
        //     'data_list'=>$data_list
        // ]);
    }
    public function create(Request $request){
        $company=new TB_Company;
        $company->name = $request->name;
        $company->image = $request->image;
        $company->companyaddressthai = $request->companyaddressthai;
        $company->companyaddresseng = $request->companyaddresseng;
        $company->save();
        return redirect('/Company')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function update(Request $request){
        $company=TB_Company::find($request->id);
        $company->name = $request->name;
        $company->image = $request->image;
        $company->companyaddressthai = $request->companyaddressthai;
        $company->companyaddresseng = $request->companyaddresseng;
        $company->save();
        return redirect('/Company')->with('save_success','ทำการบันทึกสำเร็จ');
    }
    public function delete($id){
        $del_data=TB_Company::destroy($id);
        return redirect()->back()->with('save_success','ลบข้อมูลเรียบร้อย');
    }
}

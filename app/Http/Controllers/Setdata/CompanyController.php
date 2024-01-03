<?php

namespace App\Http\Controllers\Setdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        // $data_list=Data::get(); เชื่อมฐานข้อมูล
        return view('admin.company.index',[
            // 'data_list'=>$data_list
        ]);
    }
}

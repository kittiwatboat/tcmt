<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    public function index(){
        // $data_list=Data::get(); เชื่อมฐานข้อมูล
        return view('admin.data.index',[
            // 'data_list'=>$data_list
        ]);
    }
}

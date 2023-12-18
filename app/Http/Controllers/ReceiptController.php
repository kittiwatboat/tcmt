<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use Illuminate\Support\Facades\Hash;

class ReceiptController extends Controller
{
    public function index(){
        // $data_list=Data::get(); เชื่อมฐานข้อมูล
        return view('admin.receipt.index',[
            // 'data_list'=>$data_list
        ]);
    }
}

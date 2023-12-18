<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    public function index(){
        // $data_list=Data::get(); เชื่อมฐานข้อมูล
        return view('admin.payment.index',[
            // 'data_list'=>$data_list
        ]);
    }
}

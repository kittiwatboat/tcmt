<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_onshift;

class OnshiftController extends Controller
{
    public function index(Request $request,$show){
        if($show == null){
            $on_shift=tb_onshift::paginate(10);
        }else{
            $on_shift=tb_onshift::paginate($show);
        }
        return view('admin.on_shift.index',[
            'on_shift'=>$on_shift
        ]);
    }
}

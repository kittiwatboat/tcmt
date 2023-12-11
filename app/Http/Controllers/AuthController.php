<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function admin_login(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required|string|not_contains_script',
            'password' => 'required|string|min:6',
        ],[
            "password.min"=>"กรุณากรอกรหัสผ่านให้ครบ",
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->errors()->first()],400);
        }
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('admin')->with('success','Welcome back');
        }else{
            return redirect('login')->with('fail','Username หรือ Password ไม่ถูกต้อง');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->back();
    }
}

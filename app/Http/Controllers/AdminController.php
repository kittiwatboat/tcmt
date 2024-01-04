<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
class AdminController extends Controller
{
    public function index(Request $request){
        //show = จำนวนรายชื่อที่จะแสดงใน 1 หน้า
        if($request->show == null){
            //ถ้า show = null แสดงแค่ 10
            if(!empty($request->search)){
            $user_list=User::where('username','like','%'.$request->search.'%')
            ->orwhere('firstname','like','%'.$request->search.'%')
            ->orwhere('lastname','like','%'.$request->search.'%')
            ->paginate(10);
            }else{
            $user_list=User::paginate(10);
            }
        }else{
            //ถ้า show != null แสดงตามจำนวนที่ส่งเข้ามา
            if(!empty($request->search)){
            $user_list=User::where('username','like','%'.$request->search.'%')
            ->orwhere('firstname','like','%'.$request->search.'%')
            ->orwhere('lastname','like','%'.$request->search.'%')
            ->paginate($request->show);
            }else{
            $user_list=User::paginate($request->show);
            }
        }
        return view('admin.user.index',[
            'user_list'=>$user_list,
            'show'=>$request->show,
            'search'=>$request->search
        ]);
    }
    public function create_admin(Request $request){
        $validator=validator::make($request->all(),[
            'firstname' => 'required|string|not_contains_script',
            'lastname' => 'required|string|not_contains_script',
            'username' => 'required|string|not_contains_script',
            'password' => 'required|string|not_contains_script|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
            'role' => 'required|in:admin,viewer'
        ],[
            'password.regex'=>'Password must contain at least 8 characters a-z,0-9, both lowercase and uppercase letters.'
        ]);
        if($validator->fails()){
            // $error=$validator->errors()->all()[0];
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $user=new User;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            $user->password = hash::make($request->passeord);
            $user->role = $request->role;
            $user->save();
            return redirect('admin')->with('save_success','ทำการบันทึกสำเร็จ');
        }

    }
    public function update_admin(Request $request){
        $validator=validator::make($request->all(),[
            'firstname' => 'required|string|not_contains_script',
            'lastname' => 'required|string|not_contains_script',
            'username' => 'required|string|not_contains_script',
            // 'password' => 'required|string|not_contains_script|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
            'role' => 'required|in:admin,viewer'
        ],[
            'password.regex'=>'Password must contain at least 8 characters a-z,0-9, both lowercase and uppercase letters.'
        ]);
        if($validator->fails()){
            // $error=$validator->errors()->all()[0];
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $user=User::find($request->id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            if($request->password != null){
                $user->password = hash::make($request->passeord);
            }
            $user->role = $request->role;
            $user->save();
            return redirect('admin')->with('save_success','ทำการบันทึกสำเร็จ');
        }
    }
    public function delete_admin($id){
        $del_user=User::destroy($id);
        return redirect()->back()->with('save_success','ลบข้อมูลเรียบร้อย');
    }
}

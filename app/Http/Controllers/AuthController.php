<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function doLogin(Request $request){
        $usname = $request->input('username');
        $pass = $request->input('password');
        if(Auth::attempt([
            'username' => $usname,
            'password' => $pass
            ]))
            {
                return redirect('/user');

        }
        return back()->withErrors(["message" => "ไม่พบข้อมูลที่กรอกเข้ามา"]);
    }

    public function doRegister(Request $request){

    }
    public function logout(){
        Auth::logout();
        return redirect('auth/login');
    }
}

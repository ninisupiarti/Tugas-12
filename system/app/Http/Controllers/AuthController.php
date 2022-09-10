<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('frontview.login');
    }

    function showregister(){
        return view('frontview.register');
    }

    function showlogin2(){
        return view('BackView.login2');
    }

    function logout(){
        Auth()->logout();
        return redirect('dashboard');
    }

    function loginProcess(){
        if (Auth()->attempt(['user_name' => request('user_name'), 'password' => request('password')])){
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek username dan password anda');
        }
    }
}

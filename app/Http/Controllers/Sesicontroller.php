<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Sesicontroller extends Controller
{
    function index(){
        return view('Login');
    }
    function Login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib di isi',
            'password.required'=>'Password wajib di isi',
        ]);
        $infoLogin=[
            'email'=>request()->email,
            'password'=>request()->password,
        ];
        if(Auth::attempt($infoLogin)){
            return redirect('/Users');
            exit();
        }else{
            return redirect('yayasan-backoffice')->withErrors('Username dan Password yang di masukan tidak sesuai')->withInput();
        }
        
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    
    //
    public function loadAllUsers(){
        $all_Users= User::all();
        return view('Users',compact('all_Users'));
    }

    public function loadaddUserForm(){
        return view('add-user');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'phone_number' => 'required|digits_between:10,15',
        'password' => 'required|confirmed|min:8',
    ]);

    // Simpan data ke database
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/Users')->with('success', 'User added successfully!');
}

}

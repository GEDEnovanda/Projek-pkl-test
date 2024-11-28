<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Constructor untuk middleware
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['store', 'loadaddUserForm']);
    // }

    public function loadAllUsers()
    {
        $all_Users = User::all();
        return view('Users', compact('all_Users'));
    }

    public function loadAllbackoffice()
    {
        $all_Users = User::all();
        return view('Backoffice', compact('all_Users'));
    }

    public function loadaddUserForm()
    {
        return view('add-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
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

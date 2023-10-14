<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Start Page',
        );
        return view('/pages/index', $data);
    }
    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('/pages/login', $data);
    }
    public function register()
    {
        $data = array(
            'title' => 'Daftar Akun',
        );
        return view('/pages/register', $data);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:3|confirmed'
        ], [
            'email.required' => 'Email wajib diisi',
            'name.required' => 'Nama wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => "",
            'image' => "default.jpg",
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infoLogin)) {
            return redirect('/dashboard');
        } else {
            return redirect('')->withErrors('Email dan Password tidak terdaftar')->withInput();
        }
    }
    public function valid(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infoLogin)) {
            return redirect('/dashboard');
        } else {
            return redirect('')->withErrors('Email dan Password tidak terdaftar')->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'user' => Auth::user(),
        );

        return view('/pages/dashboard', $data);
    }

    public function profile(){
        $data = array(
            'title' => 'Profile',
            'user' => Auth::user(),

        );

        return view('/pages/profiles/profile', $data);
    }

    public function profileVisit(){
        $data = array(
            'title' => 'Profile',
            'user' => Auth::user(),
        );

        return view('/pages/profiles/profileVisit', $data);
    }

    public function edit(){
        $data = array(
            'title' => 'Edit Profile',
            'user' => Auth::user(),
        );

        return view('/pages/profiles/edit', $data);
    }

}

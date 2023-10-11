<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'user' => Auth::user(),
        );

        return view('/pages/dashboard',$data);
    }
}

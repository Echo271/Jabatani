<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaniController extends Controller
{
    //
    public function akun(){
        $data = array(
            'title' => 'Profil Petani',
            'user' => Auth::user()
        );
        return view('/pages/petani/akun', $data);
    }
}

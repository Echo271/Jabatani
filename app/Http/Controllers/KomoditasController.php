<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomoditasController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Cabai Besar',
            'user' => Auth::user()
        );
        return view('/pages/komoditas/list', $data);
    }

    public function single()
    {
        $data = array(
            'title' => 'Cabai Besar',
            'user' => Auth::user()
        );
        return view('/pages/komoditas/single', $data);
    }
    public function pesanan()
    {
        $data = array(
            'title' => 'Pesanan',
            'user' => Auth::user()
        );
        return view('/pages/komoditas/pesanan', $data);
    }
    public function create()
    {
        $data = array(
            'title' => 'Tambah Komoditas',
            'user' => Auth::user()
        );
        return view('/pages/komoditas/create', $data);
    }
    public function edit()
    {
        $data = array(
            'title' => 'Edit Komoditas',
            'user' => Auth::user()
        );
        return view('/pages/komoditas/edit', $data);
    }


}

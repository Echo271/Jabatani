<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komoditas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class KomoditasController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Cabai Besar',
            'user' => Auth::user()
        );
        return view('/pages/pedagang/list', $data);
    }

    public function single()
    {

        $data = array(
            'title' => 'Cabai Besar',
            'user' => Auth::user()
        );
        return view('/pages/pedagang/single', $data);
    }
    public function singleKomoditas()
    {

        $data = array(
            'title' => 'Cabai Besar',
            'user' => Auth::user()
        );
        return view('/pages/komoditas/edit', $data);
    }
    public function pesanan()
    {
        $data = array(
            'title' => 'Pesanan',
            'user' => Auth::user()
        );
        return view('/pages/pedagang/pesanan', $data);
    }
    public function inputData()
    {
        $data = array(
            'title' => 'Input Komoditas',
            'user' => Auth::user(),
            'kategori' => Kategori::all(),
        );
        return view('/pages/komoditas/input', $data);
    }
    public function store(Request $request)
    {
        try {
            Komoditas::create([
                'name' => $request->name,
                'petani_id' => $request->petani_id,
                'kategori' => $request->kategori,
                'stock' => $request->stok,
                'keterangan' => $request->keterangan,
            ]);
            return redirect('profile')->with('success', 'Data Berhasil Disimpan');
        } catch (QueryException $e) {
            // Tangani error SQL di sini
            $e->getMessage(); // akan memberikan pesan error SQL
            return redirect('create')->withErrors($e->getMessage())->withInput();
        }
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

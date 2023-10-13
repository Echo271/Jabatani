<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komoditas;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedagangController extends Controller
{
    public function kategori($kategori = 'Cabai Besar')
    {
        if (Kategori::where('name', $kategori)) {
            $komoditas = Komoditas::where('kategori', $kategori)->get();
        }
        $data = array(
            'title' => $kategori,
            'user' => Auth::user(),
            'komoditas' => $komoditas
        );
        return view('/pages/pedagang/list', $data);
    }
    public function single($id_komoditas, $id_pedagang)
    {
        if ($id_pedagang != Auth::user()->id) {
            return redirect('dashboard');
        }
        $komoditas = Komoditas::where(
            'id',
            $id_komoditas
        )->first();
        $data = array(
            'title' => 'Cabai Besar',
            'user' => Auth::user(),
            'komoditas' => $komoditas
        );
        return view('/pages/pedagang/single', $data);
    }
    public function order(Request $request)
    {
        try {
            Pesanan::create([
                'pedagang_id' => $request->id_pedagang,
                'petani_id' => $request->id_petani,
                'komoditas_id' => $request->id_komoditas,
                'stok' => $request->pesanan,
            ]);
            return redirect('profile')->with('success', 'Data Berhasil Disimpan');
        } catch (QueryException $e) {
            // Tangani error SQL di sini
            $e->getMessage(); // akan memberikan pesan error SQL
            return redirect('profile')->withErrors($e->getMessage())->withInput();
        }
    }
}

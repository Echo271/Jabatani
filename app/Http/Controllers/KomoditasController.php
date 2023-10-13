<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Komoditas;
use App\Models\Pesanan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class KomoditasController extends Controller
{



    public function single($id_komoditas, $id_petani)
    {
        // jika yang akses bukan user yang login
        if($id_petani != Auth::user()->id){
            return redirect('dashboard');
        }
        $komoditas = Komoditas::where(
            'id',
            $id_komoditas
        )->where('petani_id', $id_petani)->first();

        $pesanan = Pesanan::where('komoditas_id',$id_komoditas)->get();

        $data = array(
            'title' => '',
            'user' => Auth::user(),
            'komoditas' => $komoditas,
            'pesanan' => $pesanan
        );
        return view('/pages/petani/single', $data);
    }
    public function pesanan()
    {
        $data = array(
            'title' => 'Pesanan',
            'user' => Auth::user()
        );
        return view('/pages/pedagang/pesanan', $data);
    }
    public function create()
    {
        $data = array(
            'title' => 'Input Komoditas',
            'user' => Auth::user(),
            'kategori' => Kategori::all(),
            'tipe' => 'create'
        );
        return view('/pages/komoditas/input', $data);
    }
    public function update($id = 0)
    {
        if (!Komoditas::find($id)) {
            return redirect('dashboard');
        }
        $data = array(
            'title' => 'Input Komoditas',
            'user' => Auth::user(),
            'kategori' => Kategori::all(),
            'komoditas' => Komoditas::where('id', $id)->first(),
            'tipe' => 'update'
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
    public function edit(Request $request)
    {
        try {
            $user_id = Auth::user()->id;
            Komoditas::where('id', $request->id)->update([
                'kategori' => $request->kategori,
                'stock' => $request->stok,
                'keterangan' => $request->keterangan,
            ]);
            return redirect("single-petani/$request->id/$user_id")->with('success', 'Data Berhasil Disimpan');
        } catch (QueryException $e) {
            // Tangani error SQL di sini
            $e->getMessage(); // akan memberikan pesan error SQL
            return redirect('profile')->withErrors($e->getMessage())->withInput();
        }
    }
    public function delete($id_komoditas,$id_petani){
        Komoditas::where('id', $id_komoditas)->where('petani_id',$id_petani)->delete();

        return redirect('profile')->with('success', 'Data Berhasil Dihapus');
    }
}

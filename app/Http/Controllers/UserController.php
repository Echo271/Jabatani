<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => Auth::user(),
        ];

        return view('pages.dashboard', $data);
    }

    public function profile()
    {
        $data = array(
            'title' => 'Profile',
            'user' => Auth::user(),

        );

        return view('/pages/profiles/profile', $data);
    }

    public function profileVisit()
    {
        $data = [
            'title' => 'Profile',
            'user' => Auth::user(),
        ];

        return view('pages.profiles.profileVisit', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Profile',
            'user' => Auth::user(),
        ];

        return view('pages.profiles.edit', $data);
    }
    public function update(Request $request)
    {
        try {
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $nama_file = time() . '_' . $file->getClientOriginalName();
                $lokasi_simpan = public_path('profiles');

                if (file_exists($lokasi_simpan . '/' . $nama_file)) {
                    return redirect("profile")->with('success', 'Data Berhasil Disimpan');
                } else {
                    $file->move($lokasi_simpan, $nama_file);

                    User::where('id', Auth::user()->id)->update([
                        'name' => $request->name,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'role' => Auth::user()->role,
                        'image' => $nama_file,
                    ]);
                    return redirect("profile")->with('success', 'Data Berhasil Disimpan');
                }
            }
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'role' => Auth::user()->role,
                'image' => Auth::user()->image,
            ]);
            return redirect("profile")->with('success', 'Data Berhasil Disimpan');
        } catch (QueryException $e) {
            // Tangani error SQL di sini
            $e->getMessage(); // akan memberikan pesan error SQL
            return redirect('profile')->withErrors($e->getMessage())->withInput();
        }
    }

    public function getData()
    {
        // Path to the JSON files
        $filePath1 = File::get('C:\xampp\htdocs\Jabatani\dataserver\hargapasar-2023-10-12.json');
        $filePath2 = File::get('C:\xampp\htdocs\Jabatani\dataserver\hargapasar-2023-10-13.json');

        // Parse the JSON data into PHP arrays
        $jsonData1 = json_decode($filePath1, true);
        $jsonData2 = json_decode($filePath2, true);

        $data = [
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'data_api' => [
                'data1' => $jsonData1,
                'data2' => $jsonData2
            ]
        ];

        return view('/pages/dashboard', $data);
    }
}

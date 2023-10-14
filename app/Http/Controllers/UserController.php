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
        $data = [
            'title' => 'Dashboard',
            'user' => Auth::user(),
        ];

        return view('pages.dashboard', $data);
    }

    public function profile(){
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

    public function getData()
    {
        // Path to the JSON files
        $filePath1 = File::get('D:\Project\Website\Jabatani\dataserver\hargapasar-2023-10-12.json');
        $filePath2 = File::get('D:\Project\Website\Jabatani\dataserver\hargapasar-2023-10-13.json');

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

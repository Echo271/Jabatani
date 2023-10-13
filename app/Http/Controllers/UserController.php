<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

<<<<<<< HEAD
    public function profile()
    {
=======
    public function profile(){
>>>>>>> 367dabb9330295fae0679c9ca9872082de55f323
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

    public function getData()
    {
        // Path to the JSON file
        $filePath1 = storage_path('dataserver/hargapasar-2023-10-12.json');
        $filePath2 = storage_path('dataserver/hargapasar-2023-10-13.json');

<<<<<<< HEAD
        // Check if the file exists
        if (!Storage::exists($filePath1)) {
            return response()->json(['error' => 'JSON file not found.']);
        }
        if (!Storage::exists($filePath2)) {
            return response()->json(['error' => 'JSON file not found.']);
        }

        $dataJson = json_decode($response->getBody()->getContents(), true);

        // Read the contents of the file
        $jsonContents = Storage::get($filePath1);

        // Parse the JSON data into a PHP array
        $jsonData = json_decode($jsonContents, true); // Set the second parameter to true for an associative array

        return response()->json(['data' => $jsonData]);

        Storage::put($filename, json_encode($dataJson));

        $data = [
=======
        // Memasukan header
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
        // Mengubah format json ke array assosiative
        $dataJson = json_decode($response, true);

        $data = array(
>>>>>>> 367dabb9330295fae0679c9ca9872082de55f323
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'data_api' => $dataJson
        ];
        return view('/pages/racik', $data);
    }
}

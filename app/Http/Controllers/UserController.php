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

    public function profile()
    {
        $data = array(
            'title' => 'Profile',
            'user' => Auth::user(),
        );

        return view('/pages/profiles/profile', $data);
    }

    public function getData()
    {
        // Path to the JSON file
        $filePath1 = storage_path('dataserver/hargapasar-2023-10-12.json');
        $filePath2 = storage_path('dataserver/hargapasar-2023-10-13.json');

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
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'data_api' => $dataJson
        ];
        return view('/pages/racik', $data);
    }
}

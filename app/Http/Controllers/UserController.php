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

        return view('/pages/dashboard', $data);
    }

    public function profile(){
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
        $url = "http://api.samarindakota.go.id/api/v2/generate/dinas-perdagangan/komoditas?uuid=bed13e00-e5a0-11e8-896e-479afe1b8bbc";
        $headers = [
            "Authorization" => "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImVkMmNmNDkxYWE1MjI4ZDY2OTdhNzg4Y2JiNTA2ZmVmMTZmNjczM2ZkNjUyYTUzNWZiN2Y4NGFjNmE0NjQ1YzJjZWQ3YWUzYjEyYzAyMDI3In0.eyJhdWQiOiIzIiwianRpIjoiZWQyY2Y0OTFhYTUyMjhkNjY5N2E3ODhjYmI1MDZmZWYxNmY2NzMzZmQ2NTJhNTM1ZmI3Zjg0YWM2YTQ2NDVjMmNlZDdhZTNiMTJjMDIwMjciLCJpYXQiOjE2OTcyMDgyMjQsIm5iZiI6MTY5NzIwODIyNCwiZXhwIjoxNzI4ODMwNjI0LCJzdWIiOiI3NzYiLCJzY29wZXMiOlsibW9ub2dyYWZpLWtlY2FtYXRhbiIsIm1vbm9ncmFmaS1rZWx1cmFoYW4iLCJwdXNrZXNtYXMiLCJ0ZW1wYXQtaWJhZGFoIiwiZGF0YS1ydCIsInBlcnVzYWhhYW4tamFzYSIsImthd2FzYW4tcmF3YW4iLCJrb3BlcmFzaSIsInNhcmFuYS1vbGFocmFnYSIsIm9yZ2FuaXNhc2kiLCJwYXJpd2lzYXRhIiwicGVyZGFnYW5nYW4iLCJwb3N5YW5kdSIsInRva29oLW1hc3lhcmFrYXQiLCJ0b2tvaC1hZ2FtYSIsInNvc2lhbCIsInBlbnlha2l0LWlzcGEiLCJwZW55YWtpdC1kaWFyZSIsInBlbnlha2l0LWtpYSIsInBlbnlha2l0LXBoYnMiLCJwZW55YWtpdC1wbmV1bW9uaWEiLCJwZW55YWtpdC10YiIsInJlZmVyZW5zaS1wcm92aW5zaSIsInJlZmVyZW5zaS1rZWx1cmFoYW4iLCJwZWdhd2FpLXBlci1nb2xvbmdhbiIsInBlZ2F3YWktcGVyLWVzZWxvbiIsInBlZ2F3YWktcGVyLWdlbmRlciIsInBlZ2F3YWktcGVyLW9wZCIsInBlZ2F3YWktcGVyLWFnYW1hLWdlbmRlciIsInBlZ2F3YWktcGVyLWVzZWxvbi1nZW5kZXIiLCJwZWdhd2FpLXBlci1nb2xvbmdhbi1nZW5kZXIiLCJwZWdhd2FpLXBlci1wZW5kaWRpa2FuLWdlbmRlciIsInBlZ2F3YWktcGVyLXBlbnNpdW4tZ29sb25nYW4tZ2VuZGVyIiwicGVnYXdhaS1wZXItdW11ci1nZW5kZXIiLCJwZWdhd2FpLXBlci1qYWJhdGFuLWZ1bmdzaW9uYWwiLCJiZXJpdGEiLCJsaXN0LW9wZCIsInJlbnN0cmEiLCJldmVudHMiLCJiZXJpdGFwYXJpd3N0YSIsImFnZW5kYSIsInBlbmd1bXVtYW4iLCJwZW5naGFyZ2FhbiIsImdhbGVyaSIsImJpZGFuZyIsInN0cnVrdHVyYWwiLCJrb21vZGl0YXMiLCJwYXNhci10cmFkaXNpb25hbCIsInB1c2F0LW9sZWgtb2xlaCIsInBhc2FyLW1vZGVybiIsImhhcmdhLWhhcmlhbiIsImhhcmdhLWtvbW9kaXRpIiwic29wIiwicGFzYXItd2l0aC1rb21vZGl0aSIsImF0bGl0Iiwic2FyYW5hLXByYXNhcmFuYSIsImNhYm9yIiwic2Vrb2xhaCIsImhvdGxpbmUiLCJwZXJhdHVyYW4iLCJrYXN1cy1wZXItamVuaXMiLCJrYXN1cy1wZXIta2VjYW1hdGFuIiwicGVydXNhaGFhbi10ZXJkYWZ0YXIiLCJsb3dvbmdhbi13ZWJzaXRlIiwiYmVyaXRha29taW5mbyIsImNjdHYiLCJvcGQiLCJTS1QiLCJ0ZXNicHMiLCJtYXN0ZXJrZWNhbWF0YW4iLCJ0ZW5hbnQiLCJiZXJpdGFfcHBpZCIsInJlZmVyZW5zaS1vcmdhbmlzYXNpIiwiZG9rdW1lbiIsImFsYnVtIiwidmlkZW8iLCJnbG9iYWwiLCJjb3ZpZC1oYXJpYW4iLCJwcm92aW5zaSIsImtvdGEiLCJrZWNhbWF0YW4iLCJrZWx1cmFoYW4iLCJrYXRlZ29yaSIsInBlcmF0dXJhbi1rZW1lbnRlcmlhbiIsInBlcmF0dXJhbi1ieS11dWlkIiwiaGFyaWFuIiwicHJvZHVrIiwidXJ1c2FuIiwiamVuaXNkYXRhIiwidW5pdCIsInBlbmNhcmlhbiJdfQ.kh_r3xm9pCQoUX0vBsTc81faUEyFCzzrv5H6IcMeoNoXA6_oRX2WCoAdz1fnqawfQIactMMe3eBsScjUxWJRtvhzRIpM10UVLVCrkyapoSxwfsDZdqN7UBnYIvCImooObI076S7hCYzbZY_efBY9Sm7WyX21O1b0aVPNjs2ryfz-747Q2hpEbPA1kN0Vea5UDq61XIViiGvvwSgxpugsvs2MlZapfcmJONP6SHWOBbzQAUxVBbRJWwuCJgpeRYyBvfDVPU2UVb0wkg8rKvhq7LR4-PmlT9veXeI0R7sTJyG2C1FjbLTYUTMnSwBuvhzUIWJn10ekdR_2yfG__5kAnt_VTf-V_cEAOH5rD4L8payEMEhyQC5nAJFml-FzjEK8DjAs-A8uOe6fZ0wq9_vRDxX4u0q4CHoI1XeolwOA_oM1CP4uHxRIjBSDmI-sTD606EbBx4KxnuQnv-X8hLsoCTGdTgBMiPdJ-l14ZoDIuWIlQNA1WloAiq0hJb6Hn_iKL2sN4fF5n1bgpSHXREHEyMY5mZ11zhgaYlZOgB4q17TwUTu7nIwGrj1TQ61OnJuZ1s8Lz4puwc9OgZpZLlvMyg9xif0z8CXRzqG0k9eBwCR2WEwjNu4NUoX1uXFrX3EEOSQJ_BK1f5MWnTYCZtFn4L5hG6fIdTmMz0XxY856mr0"
        ];

        // Memasukan header
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
        // Mengubah format json ke array assosiative
        $dataJson = json_decode($response, true);

        $data = array(
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'data_api' => $dataJson,
        );
        return view('/pages/racik', $data);
    }
}

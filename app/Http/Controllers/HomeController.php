<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home page 
    public function home()
    {
        return view('auth.login');
    }

    // watch page 
    public function watch()
    {
        return view('frontend.watch');
    }

    //portfolio page 
    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    //portfolio page 
    public function discover()
    {
        return view('frontend.discover');
    }



    // public function fetchDataFromApi()
    // {
    //     $apiKey = "251c0b31-d0eb-4e60-a0d3-4ec087d84917";
    //     $secretKey = "FE9383D33BAE04C467F7B6DE7681A1B0";
    //     $apiName = "test";
    //     $permissions = "Read";
    //     $password = "Test@123";

    //     // Set the API endpoint URL
    //     $apiUrl = "https://api.example.com/data"; // Replace with the actual API endpoint URL

    //     // Set the request headers
    //     $headers = [
    //         'Authorization' => 'Bearer ' . base64_encode($apiKey . ':' . $secretKey),
    //         'API-Name' => $apiName,
    //         'Permissions' => $permissions,
    //         'Password' => $password,
    //         'Accept' => 'application/json',
    //     ];


    //     $response = Http::withHeaders($headers)->get($apiUrl);

    //     $statusCode = $response->status();
    //     $data = $response->json();
    // }
}

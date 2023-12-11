<?php

namespace App\Http\Controllers;

use App\Models\AddTread;
use Illuminate\Support\Facades\Auth;
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
        $id = Auth::user()->id;
        $data = AddTread::where('User_id', $id)->get();
        return view('frontend.portfolio', compact('data'));
    }

    //portfolio page 
    public function discover()
    {
        return view('frontend.discover');
    }

    // view add tread page 

    public function addTread()
    {
        return view('frontend.addTread');
    }

    // add tread data to DB

    function addTreadDataStore(Request $request)
    {
        $id = Auth::user()->id;
        AddTread::insert([
            'TreadName' => $request->name_tread,
            'Unite' => $request->unite_tread,
            'Open' => $request->open_tread,
            'User_id' => $id,
        ]);

        return redirect()->route('portfolio');
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

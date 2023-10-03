<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        echo view('register');
    }

    public function processRegistration(Request $request)
    {
        // Validasi form jika diperlukan
        //dd($request);
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'nationality' => 'required|string',
            'language' => 'required',
            'bio' => 'required',
        ]);
        // Proses penyimpanan data pengguna jika diperlukan
        // ...
        // dd($v/zalidatedData);
        // Redirect ke halaman selamat datang dengan data yang diperlukan
        return view("welcome", [
            "first_name"=> $validatedData['first_name'],
            "last_name"=> $validatedData['last_name'],
            "gender"=> $validatedData['gender'],
            "nationality"=> $validatedData['nationality'],
            "language"=> $validatedData['language'],
            "bio"=> $validatedData['bio'],
        ]);
    }

    public function welcome(Request $request)
    {
        // Halaman selamat datang
        return view('welcome');
    }
}

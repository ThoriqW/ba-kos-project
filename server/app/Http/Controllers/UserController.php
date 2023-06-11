<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required|unique:users|regex:/^08\d{8,}$/i',
            'password' => 'required|min:8'
        ]);

        // Membuat objek User baru
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->password = bcrypt($request->input('password'));

        // Menyimpan data pengguna ke database
        $user->save();
        $user->assignRole('user');

        // Mengembalikan response sukses dengan data pengguna yang baru ditambahkan
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);
    }
}

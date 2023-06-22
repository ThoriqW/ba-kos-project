<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;




class UserController extends Controller
{

    public function index()
    {
        $user = User::role('user')->get();
        return response()->json($user);
    }

    public function show(User $user)
    {
        return response()->json($user->load('userProfile'));
        // Memuat data profil terkait
    }

    public function store(Request $request)
    {
        try {
            // Validasi input dari request
            $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users',
                'phone_number' => 'required|unique:users|regex:/^08\d{8,}$/i',
                'password' => 'required|min:8|confirmed'
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

            $token = $user->createToken('API Token')->plainTextToken;

            // Mengembalikan response sukses dengan data pengguna yang baru ditambahkan
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user,
                'token' => $token
            ], 201);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function loginUser(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required',
            ]);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email atau password yang Anda masukkan tidak valid.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            if (!$user->hasRole('user')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email atau password yang Anda masukkan tidak valid.',
                ], 403);
            }

            // Login berhasil, buat token dan kirimkan respons sukses
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'user' => $user->load('userProfile'), // Memuat data profil terkait
                'token' => $token,
            ], 200);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }



    public function update(Request $request, User $user)
    {
        try {
            $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users,email,' . $user->id,
                'phone_number' => 'required|unique:users,phone_number,' . $user->id . '|regex:/^08\d{8,}$/i',
                // 'password' => 'required|min:8'
            ]);

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone_number = $request->input('phone_number');
            // $user->password = bcrypt($request->input('password'));

            $user->save();

            return response()->json([
                'message' => 'User updated successfully',
                'user' => $user
            ], 200);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json(null, 204);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
}

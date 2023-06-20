<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MitraController extends Controller
{

    public function index()
    {
        $user = User::role('mitra')->get();
        return response()->json($user);
    }

    public function show(User $user)
    {
        return response()->json($user->load('kos'));
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
            $user->assignRole('mitra');

            $token = $user->createToken('API Token')->plainTextToken;

            // Mengembalikan response sukses dengan data pengguna yang baru ditambahkan
            return response()->json([
                'message' => 'Mitra created successfully',
                'user' => $user,
                'token' => $token
            ], 201);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function loginMitra(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            if (!$user->hasRole('mitra')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized.'
                ], 403);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password do not match with our records.',
                ], 401);
            }

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function update(Request $request, User $user)
    {
        try {
            // Validasi input dari request
            $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users,email,' . $user->id,
                'phone_number' => 'required|unique:users,phone_number,' . $user->id . '|regex:/^08\d{8,}$/i',
                'password' => 'required|min:8'
            ]);

            // Mengupdate data pengguna
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone_number = $request->input('phone_number');
            $user->password = bcrypt($request->input('password'));

            // Menyimpan perubahan ke database
            $user->save();

            // Mengembalikan response sukses dengan data pengguna yang diupdate
            return response()->json([
                'message' => 'User updated successfully',
                'user' => $user
            ]);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(User $user)
    {
        try {
            // Menghapus pengguna dari database
            $user->delete();

            // Mengembalikan response sukses tanpa data (204 No Content)
            return response()->json(null, 204);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

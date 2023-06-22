<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserProfileController extends Controller
{

    public function index()
    {
        $userProfiles = UserProfile::all();
        return response()->json($userProfiles);
    }

    public function show(UserProfile $userProfile)
    {
        return response()->json($userProfile);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'profile_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'gender' => 'nullable|string',
                'birthdate' => 'nullable|date',
                'city' => 'nullable|string',
                'status' => 'nullable|string',
                'job' => 'nullable|string'
            ]);

            $userProfile = UserProfile::create($request->all());
            return response()->json($userProfile, 201);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function update(Request $request, UserProfile $userProfile)
    {
        try {
            $request->validate([
                'profile_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'gender' => 'nullable|string',
                'birthdate' => 'nullable|date',
                'city' => 'nullable|string',
                'status' => 'nullable|string',
                'job' => 'nullable|string'
            ]);

            $userProfile->update($request->all());
            return response()->json($userProfile);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function destroy(UserProfile $userProfile)
    {
        try {
            $userProfile->delete();
            return response()->json(null, 204);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
}

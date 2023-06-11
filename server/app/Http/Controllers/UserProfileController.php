<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

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
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'profile_photo' => 'nullable|image',
            'gender' => 'nullable',
            'birthdate' => 'nullable|date',
            'city' => 'nullable',
            'status' => 'nullable',
            'job' => 'nullable',
        ]);

        $userProfile = UserProfile::create($request->all());
        return response()->json($userProfile, 201);
    }

    public function update(Request $request, UserProfile $userProfile)
    {
        $request->validate([
            'profile_photo' => 'nullable|image',
            'gender' => 'nullable',
            'birthdate' => 'nullable|date',
            'city' => 'nullable',
            'status' => 'nullable',
            'job' => 'nullable',
        ]);

        $userProfile->update($request->all());
        return response()->json($userProfile);
    }

    public function destroy(UserProfile $userProfile)
    {
        $userProfile->delete();
        return response()->json(null, 204);
    }
}

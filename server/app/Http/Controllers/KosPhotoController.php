<?php

namespace App\Http\Controllers;

use App\Models\KosPhoto;
use Illuminate\Http\Request;

class KosPhotoController extends Controller
{
    public function index()
    {
        $kosPhoto = KosPhoto::all();
        return response()->json($kosPhoto);
    }

    public function show(KosPhoto $kosPhoto)
    {
        return response()->json($kosPhoto);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'kos_id' => 'required|exists:kos,id',
                'front_photos' => 'nullable|images',
                'interior_photos' => 'nullable|images',
                'street_photos' => 'nullable|images',
                'front_room_photos' => 'nullable|images',
                'interior_room_photos' => 'nullable|images',
                'bath_room_photos' => 'nullable|images',
                'additional_room_photos' => 'nullable|images'
            ]);

            $kosPhoto = KosPhoto::create($request->all());
            return response()->json($kosPhoto, 201);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, KosPhoto $kosPhoto)
    {
        try {
            $request->validate([
                'front_photos' => 'nullable|images',
                'interior_photos' => 'nullable|images',
                'street_photos' => 'nullable|images',
                'front_room_photos' => 'nullable|images',
                'interior_room_photos' => 'nullable|images',
                'bath_room_photos' => 'nullable|images',
                'additional_room_photos' => 'nullable|images'
            ]);

            $kosPhoto->update($request->all());
            return response()->json($kosPhoto);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(KosPhoto $kosPhoto)
    {
        try {
            $kosPhoto->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

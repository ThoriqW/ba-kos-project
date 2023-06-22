<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use App\Http\Requests\StoreKosRequest;
use App\Http\Requests\UpdateKosRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class KosController extends Controller
{
    public function index()
    {
        $kos = Kos::all();
        return response()->json($kos);
    }

    public function show(Kos $kos)
    {
        return response()->json($kos);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'kos_name' => 'nullable|string',
                'kos_type' => 'nullable|string',
                'kos_description' => 'nullable|string',
                'kos_rule' => 'nullable|string',
                'kos_note' => 'nullable|string',
                'kos_address' => 'nullable|string'
            ]);

            $kos = Kos::create($request->all());
            return response()->json($kos, 201);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function update(Request $request, Kos $kos)
    {
        try {
            $request->validate([
                'kos_name' => 'nullable|string',
                'kos_type' => 'nullable|string',
                'kos_description' => 'nullable|string',
                'kos_rule' => 'nullable|string',
                'kos_note' => 'nullable|string',
                'kos_address' => 'nullable|string'
            ]);

            $kos->update($request->all());
            return response()->json($kos);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function destroy(Kos $kos)
    {
        try {
            $kos->delete();
            return response()->json(null, 204);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
}

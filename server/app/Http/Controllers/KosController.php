<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use App\Http\Requests\StoreKosRequest;
use App\Http\Requests\UpdateKosRequest;
use Illuminate\Http\Request;

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
    }
}

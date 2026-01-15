<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product = produk::all();
        return response()->json([
            'status' => 'success',
            'data' => $product
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'Required|string',
            'harga' => 'Required',
            'gambar' => 'Required',
        ]);

        $product = produk::create(
            $data
        );
        return response()->json([
            'status' => 'success',
            'message' => 'berhasil dibuat'

        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = produk::find($id);
        if (!$data) {
            return response()->json([
                'status' => 'gagal',
                'message' => 'tidak ditemukan'

            ], 404);
        }
        return response()->json(
            [
                'data' => $data
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = produk::find($id);
        if (!$data) {
            return response()->json([
                'status' => 'gagal',
                'message' => 'data tidak ada'
            ]);
        }

        $data->delete();
        return response()->json([
                'status' => 'berhasil',
                'message' => 'berhasil dihapus'
            ]);
    }
}

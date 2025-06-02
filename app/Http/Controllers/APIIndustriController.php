<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industri; // 1. penggunaaan model industri

class APIIndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. method untuk merespon permintaan baca data industri

        $industri = Industri::get();
        return response()->json($industri, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 3. method untuk merespon permintaan create data industri baru

        $industri = new Industri();
        $industri->nama = $request->nama;
        $industri->bidang_usaha = $request->bidang_usaha;
        $industri->alamat = $request->alamat;
        $industri->kontak = $request->kontak;
        $industri->email = $request->email;
        $industri->website = $request->website;
        $industri->save();
        return response()->json($industri, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 4. method untuk respon proses baca data salah satu industri

        $industri = Industri::find($id);
        return response()->json($industri, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 5. method untuk respon update data industri

        $industri = Industri::find($id);
        $industri->nama = $request->nama;
        $industri->bidang_usaha = $request->bidang_usaha;
        $industri->alamat = $request->alamat;
        $industri->kontak = $request->kontak;
        $industri->email = $request->email;
        $industri->website = $request->website;
        $industri->save();
        return response()->json($industri, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 6. method untuk respon proses hapus data salah satu industri

        Industri::destroy($id);
        return response()->json(["message"=>"behasil terhapus"], 200);
    }
}
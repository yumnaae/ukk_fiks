<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru; // 1. penggunaaan model guru

class APIGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. method untuk merespon permintaan baca data guru

        $guru = Guru::get();
        return response()->json($guru, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 3. method untuk merespon permintaan create data guru baru

        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->gender = $request->gender;
        $guru->alamat = $request->alamat;
        $guru->kontak = $request->kontak;
        $guru->email = $request->email;
        $guru->save();
        return response()->json($guru, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 4. method untuk respon proses baca data salah satu guru

        $guru = Guru::find($id);
        return response()->json($guru, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 5. method untuk respon update data guru

        $guru =  Guru::find($id);
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->gender = $request->gender;
        $guru->alamat = $request->alamat;
        $guru->kontak = $request->kontak;
        $guru->email = $request->email;
        $guru->save();
        return response()->json($guru, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 6. method untuk respon proses hapus data salah satu guru

        Guru::destroy($id);
        return response()->json(["message"=>"behasil terhapus"], 200);
    }
}
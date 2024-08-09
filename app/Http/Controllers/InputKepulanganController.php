<?php

namespace App\Http\Controllers;

use App\Models\Kepulangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InputKepulanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua data dari tabel kepulangan
         $kepulangans = Kepulangan::where('id_user', Auth::id())->get();

         // Mengirim data ke view
         return view('warga.inputkepulangan', compact('kepulangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warga.createkepulangan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_kepulangan' => 'required|date',
            'status_perkawinan' => 'required|boolean',
            'alasan_kepulangan' => 'required|string|max:255',
            'alamat_kepulangan' => 'required|string|max:255',
        ]);

        Kepulangan::create([
            'id_user' => Auth::id(),
            'id_keberangkatan' => 1, // Atur ini sesuai kebutuhan
            'tanggal_kepulangan' => $request->tanggal_kepulangan,
            'status_perkawinan' => $request->status_perkawinan,
            'alasan_kepulangan' => $request->alasan_kepulangan,
            'alamat_kepulangan' => $request->alamat_kepulangan,
            'status_approve' => false,
        ]);

        return redirect('/inputkepulangan')->with('success', 'Data kepulangan berhasil ditambahkan.');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}

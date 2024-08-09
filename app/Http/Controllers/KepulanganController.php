<?php
namespace App\Http\Controllers;

use App\Models\Kepulangan;
use App\Http\Requests\StorekepulanganRequest;
use App\Http\Requests\UpdatekepulanganRequest;

class KepulanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel kepulangan
        $kepulangans = Kepulangan::all();

        // Mengirim data ke view
        return view('admin.datakepulangan', compact('kepulangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implementasikan logika untuk menampilkan form pembuatan jika diperlukan
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekepulanganRequest $request)
    {
        // Implementasikan logika untuk menyimpan data baru jika diperlukan
    }

    /**
     * Display the specified resource.
     */
    public function show(Kepulangan $kepulangan)
    {
        // Implementasikan logika untuk menampilkan detail data jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kepulangan $kepulangan)
    {
        // Implementasikan logika untuk menampilkan form edit jika diperlukan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekepulanganRequest $request, Kepulangan $kepulangan)
    {
        // Implementasikan logika untuk memperbarui data jika diperlukan
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kepulangan $kepulangan)
    {
        // Implementasikan logika untuk menghapus data jika diperlukan
    }
}

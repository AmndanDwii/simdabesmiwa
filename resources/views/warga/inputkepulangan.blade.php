@extends('layouts.warga.main')

@section('container')

<!-- resources/views/warga/inputkepulangan.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Kepulangan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Kepulangan</h2>
        <div class="text-right mb-3">
            <a href="{{ route('kepulangan.create') }}" class="btn btn-primary">Tambah Data Kepulangan</a>
          
        </div>
        <!-- Tabel Data Kepulangan -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal Kepulangan</th>
                    <th>Status Perkawinan</th>
                    <th>Alasan Kepulangan</th>
                    <th>Alamat Kepulangan</th>
                    <th>Status Approve</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kepulangans as $kepulangan)
                    <tr>
                        <td>{{ $kepulangan->id }}</td>
                        <td>{{ $kepulangan->tanggal_kepulangan }}</td>
                        <td>{{ $kepulangan->status_perkawinan ? 'Sudah Kawin' : 'Belum Kawin' }}</td>
                        <td>{{ $kepulangan->alasan_kepulangan }}</td>
                        <td>{{ $kepulangan->alamat_kepulangan }}</td>
                        <td>{{ $kepulangan->status_approve ? 'Disetujui' : 'Belum Disetujui' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data kepulangan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

@endsection
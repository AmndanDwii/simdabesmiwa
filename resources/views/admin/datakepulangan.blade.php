@extends('layouts.admin.main')

@section('container')
<!DOCTYPE html>
<html>
<head>
    <title>Kepulangan</title>
</head>
<body>
    <h1>Daftar Kepulangan</h1>
    <table border="1">
        <tr>
            <th>ID User</th>
            <th>ID Keberangkatan</th>
            <th>Tanggal Kepulangan</th>
            <th>Status Perkawinan</th>
            <th>Alasan Kepulangan</th>
            <th>Alamat Kepulangan</th>
            <th>Status Approve</th>
        </tr>
        @foreach($kepulangans as $kepulangan)
            <tr>
                <td>{{ $kepulangan->id_user }}</td>
                <td>{{ $kepulangan->id_keberangkatan }}</td>
                <td>{{ $kepulangan->tanggal_kepulangan }}</td>
                <td>{{ $kepulangan->status_perkawinan ? 'Sudah Menikah' : 'Belum Menikah' }}</td>
                <td>{{ $kepulangan->alasan_kepulangan }}</td>
                <td>{{ $kepulangan->alamat_kepulangan }}</td>
                <td>{{ $kepulangan->status_approve ? 'Disetujui' : 'Belum Disetujui' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
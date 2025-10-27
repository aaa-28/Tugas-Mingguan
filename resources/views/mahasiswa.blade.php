@extends('layouts.main')

@section('content')
<h1 class="text-center">Data Mahasiswa</h1>
<div class="row">
    <button type="button" class="btn btn-warning">Tambah Mahasiswa</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $mahasiswa)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $mahasiswa['name'] }}</td>
                <td>{{ $mahasiswa['nim'] }}</td>
                <td>{{ $mahasiswa['prodi'] }}</td>
                <td>{{ $mahasiswa['email'] }}</td>
                <td>{{ $mahasiswa['nohp'] }}</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

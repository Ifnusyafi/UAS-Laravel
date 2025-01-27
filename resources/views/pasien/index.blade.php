@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pasien</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->tanggal_lahir }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->no_hp }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

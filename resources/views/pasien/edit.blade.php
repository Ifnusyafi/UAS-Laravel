@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pasien</h1>

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $pasien->nama }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="Male" {{ $pasien->jenis_kelamin == 'Male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Female" {{ $pasien->jenis_kelamin == 'Female' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $pasien->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $pasien->no_hp }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection

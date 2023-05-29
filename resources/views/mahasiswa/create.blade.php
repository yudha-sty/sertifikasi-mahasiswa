@extends('layouts.app')
@section('content')

<form action="{{ route('store.mahasiswa') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="Nim" class="col-sm-2 col-form-label">Nim</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="nim" placeholder="Nim" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Program Studi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="prodi" placeholder="Program Studi" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">No Hp</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="no_telp" placeholder="No Hp" required>
        </div>
    </div>

    <input type="submit" class="btn btn-success" value="Simpan">
</form>

@endsection
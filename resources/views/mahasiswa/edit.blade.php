@extends('layouts.app')
@section('content')

<form action="{{ route('update.mahasiswa') }}" method="post">
    @csrf
    @foreach($mahasiswa as $m)

    <div class="form-group row">
        <label for="Nim" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="id" placeholder="Nim" value="{{ $m->id }}" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="Nim" class="col-sm-2 col-form-label">Nim</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="nim" placeholder="Nim" value="{{ $m->nim }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $m->nama }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Program Studi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="prodi" placeholder="Program Studi" value="{{ $m->prodi }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $m->alamat }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin" value="{{ $m->jk }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $m->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">No Hp</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="no_telp" placeholder="No Hp" value="{{ $m->no_telp }}">
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Update">
    @endforeach
</form>

@endsection
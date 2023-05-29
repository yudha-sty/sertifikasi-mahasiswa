@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Mahasiswa</h4>
            <a href="/create-mahasiswa  "><button class="btn btn-primary">Tambah Data Mahasiswa</button></a>
            <div class="table-responsive">
                <br>
                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{ $m->nim }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->prodi }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>{{ $m->jk }}</td>
                            <td>{{ $m->email }}</td>
                            <td>{{ $m->no_telp }}</td>
                            <td>
                                <form action="destroy-mahasiswa/{{ $m->id }}" method="Post">
                                    <a class="btn btn-primary" href="/edit-mahasiswa/{{ $m->id }}">Edit</a>
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
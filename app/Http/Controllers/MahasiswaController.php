<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa/index', compact('mahasiswa'));
    }

    public function create(){
        return view('mahasiswa/create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'nim',
            'nama',
            'prodi',
            'alamat',
            'jk',
            'email',
            'no_telp'
        ]);
        Mahasiswa::create([
            'nim' => request('nim'),
            'nama' => request('nama'),
            'prodi' => request('prodi'),
            'alamat' => request('alamat'),
            'jk' => request('jk'),
            'email' => request('email'),
            'no_telp' => request('no_telp')
        ]);
        return redirect('/mahasiswa')->with('success', 'Data Berhasil di Tambah!');
    }

    public function edit($id){
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        return view('mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }
    
    public function update(Request $request){
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ]);
        return redirect()->route('mahasiswa');
    }

    public function destroy($id){
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect()->route('mahasiswa');
    }
}
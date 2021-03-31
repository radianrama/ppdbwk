<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use Illuminate\Support\Facades\Hash;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'nisn' => 'required' ,
        //     'nama' => 'required' ,
        //     'email' => 'required' ,
        //     'nomor_telepon' => 'required' ,
        //     'jenis_kelamin' => 'required' ,
        //     'tempat_lahir' => 'required' ,
        //     'tanggal_lahir' => 'required' ,
        //     'kelas' => 'required' ,
        //     'jurusan' => 'required',
        //     'asal_sekolah' => 'required' ,
        //     'alamat' => 'required'
        // ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->nisn)
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telepon' => $request->phone,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->date,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'user_id' => User::where('email', $request->email)->first()->id
        ]);
        $siswa = Siswa::where('nisn', $request->nisn)->first();
        $user = User::where('email', $request->email)->first();
        $pdf = \PDF::loadview('pendaftaran-pdf', ['siswa' => $siswa, 'user' => $user]);
        return $pdf->stream('pendaftaran-pdf');
    }
}

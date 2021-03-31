@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('siswa.update') }}" method="post">
                    @csrf
                    @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">nisn</label>
                                <input type="text" name="nisn" class="form-control" value="{{ $siswa->nisn }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">email</label>
                                <input type="text" name="email" class="form-control" value="{{ $siswa->email }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">nomor telepon</label>
                                <input type="text" name="nomor_telepon" class="form-control" value="{{ $siswa->nomor_telepon }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">jenis_kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" value="{{ $siswa->jenis_kelamin }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">tempat_lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">tanggal_lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control" value="{{ $siswa->tanggal_lahir }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">asal_sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" value="{{ $siswa->asal_sekolah }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">kelas</label>
                                <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}">

                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword5" class="form-label">alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $siswa->alamat }}">

                            </div>
                            <div class="col-md-1 offset-md-11">
                                <br>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

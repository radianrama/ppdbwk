<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'nama',
        'email',
        'nomor_telepon',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'asal_sekolah',
        'kelas',
        'jurusan',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

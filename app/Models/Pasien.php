<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // Tentukan atribut yang dapat diisi massal
    protected $fillable = ['nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'no_hp'];

    // Opsional: Tentukan nama tabel jika tidak menggunakan nama default tabel (misalnya 'pasiens')
    protected $table = 'pasiens';
}

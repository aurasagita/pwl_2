<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'semester',
    ];

//     public function kelas()
//     {
//         return $this->belongsTo(kelas::class);
//     }
}
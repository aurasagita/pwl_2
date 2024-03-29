<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsMatkulModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'semester',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class);
    }
     public function matakuliah()
     {
         return $this->belongsTo(MataKuliahModel::class, 'matakuliah_id', 'id');
     }
}

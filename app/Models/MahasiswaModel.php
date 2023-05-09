<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp'
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }


    
}
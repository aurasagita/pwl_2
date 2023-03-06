<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraanmodel extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $primarykey = 'no_pol';
    
}

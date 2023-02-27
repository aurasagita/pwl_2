<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
 
    public function index(){
        return view('profile')
    ->with('nama', 'Aura Sagita Ashilah') 
    ->with('nim', '2141720102')
    ->with('kelas', 'TI-2B')
    ->with('absen', '04')
    ->with('prodi', 'D4 Teknik Infomatika')
    ->with('jurusan', 'Teknologi Informasi')
    ->with('Universitas', 'Politeknik Negeri Malang');
        }
    }
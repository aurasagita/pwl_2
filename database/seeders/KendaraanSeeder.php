<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
           [
            'no_pol' => 'AG 127 TAG',
            'merek' => 'Honda',
            'jenis' => 'Jupiter',
            'tahun_2' => 2015,
            'warna' => 'hitam'
           ], 
        
           [
            'no_pol' => 'AG 158 TAG',
            'merek' => 'Porche',
            'jenis' => 'Jennie',
            'tahun_2' => 2022,
            'warna' => 'hitam'
           ]

           ]);
    }
}

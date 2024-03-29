<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [
                'nama_matkul' => 'Pemograman Berbasis Objek',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4,
            ],
            [
                'nama_matkul' => 'ADBO',
                'sks' => 4,
                'jam' => 4,
                'semester' => 4,
            ],
            [
                'nama_matkul' => 'Kewarganegaraan',
                'sks' => 2,
                'jam' => 2,
                'semester' => 4,
            ],
            [
                'nama_matkul' => 'Agama',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4,
            ],
        ];

        DB::table('matakuliah')->insert($matkul);
    }
}

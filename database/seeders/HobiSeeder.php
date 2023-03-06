<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
             'nama' => 'Aura Sagita Ashilah',
             'hobi_1' => 'Membaca',
             'hobi_2' => 'Menulis',
             'hobi_3' => 'Fangirling',
             'hobi_4' => 'Menyanyi',
             'hobi_5' => 'Streaming',
             'nomor' => 001
            ], 
         
            [
            'nama' => 'Choi San',
            'hobi_1' => 'Menonton Anime',
            'hobi_2' => 'Berbelanja',
            'hobi_3' => 'Main Game',
            'hobi_4' => 'Tidur',
            'hobi_5' => 'Dance',
            'nomor' => 002
            ]
 
            ]);
    }
}

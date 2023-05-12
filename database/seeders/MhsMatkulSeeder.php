<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MhsMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matakuliah')->insert([
            [
             'id' => '1',
             'mahasiswa_id' => '101',
             'matakuliah_id' => '1',
             'nilai' => 98,
            ], 
            [
             'id' => '2',
             'mahasiswa_id' => '102',
             'matakuliah_id' => '2',
             'nilai' => 90,
            ], 
            [
             'id' => '3',
             'mahasiswa_id' => '109',
             'matakuliah_id' => '3',
             'nilai' => 88,
            ], 
            [
             'id' => '4',
             'mahasiswa_id' => '103',
             'matakuliah_id' => '4',
             'nilai' => 90,
            ], 
 
            ]);
    }
}

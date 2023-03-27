<?php

namespace Database\Seeders;

use HashContext;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Aura Sagita Ashilah',
            'email' => 'aurasagita2122@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}

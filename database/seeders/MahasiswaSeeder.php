<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => "henny",
            'nim' => 34345678,
            'prodi' => "Teknologi Informasi",
            'email' => "Aqilfatih@gmail.com",
            'nohp' => 54857326329,
        ]);
    }
}
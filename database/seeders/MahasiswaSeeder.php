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
            'nama' => "Alief Dany Seventri",
            'nim' => '195150400111002',
            'alamat' => 'Karangploso, Malang, Jawa Timur',
            'hobi' => "Badminton"
        ]);
    }
}

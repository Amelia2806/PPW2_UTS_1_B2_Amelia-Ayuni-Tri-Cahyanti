<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    public function run()
    {
        DB::table('pemain')->insert([
            [
                'nama_pemain' => 'John Doe',
                'no_punggung' => 10,
                'posisi' => 'Penyerang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemain' => 'Jane Doe',
                'no_punggung' => 7,
                'posisi' => 'Gelandang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    public function run()
    {
        DB::table('pemaiin')->insert([
            [
                'nama_pemain' => 'John Doe',
                'no_punggung' => 10,
                'posisi' => 'Penyerang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemain' => 'Heeseung',
                'no_punggung' => 7,
                'posisi' => 'Gelandang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemain' => 'Jungwon',
                'no_punggung' => 8,
                'posisi' => 'Pengganti',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemain' => 'Park Jongseong',
                'no_punggung' => 99,
                'posisi' => 'Gawang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pemain' => 'Sunghoon',
                'no_punggung' => 17,
                'posisi' => 'Center',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

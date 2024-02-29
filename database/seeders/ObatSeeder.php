<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('obats')->insert([
            'nama_obat' => 'Mylanta Sirup',
            'stok' => 100,
            'harga' => 15000,
            'kategoriobat_id' => 1
        ]);
        DB::table('obats')->insert([
            'nama_obat' => 'Paracetamol',
            'stok' => 350,
            'harga' => 40000,
            'kategoriobat_id' => 2
        ]);
        DB::table('obats')->insert([
            'nama_obat' => 'OBH Batuk Plus',
            'stok' => 40,
            'harga' => 20000,
            'kategoriobat_id' => 3
        ]);

        DB::table('obats')->insert([
            'nama_obat' => 'Panadol Regu',
            'stok' => 600,
            'harga' => 30000,
            'kategoriobat_id' => 2
        ]);
    }
}

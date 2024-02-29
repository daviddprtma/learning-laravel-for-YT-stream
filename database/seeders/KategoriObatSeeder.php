<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoriobats')->insert([
            'nama'=> 'Obat Lambung',
        ]);

        DB::table('kategoriobats')->insert([
            'nama'=> 'Sakit Panas',
        ]);

        DB::table('kategoriobats')->insert([
            'nama'=> 'Flu',
        ]);
    }
}

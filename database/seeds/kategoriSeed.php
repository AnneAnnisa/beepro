<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class kategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Face',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Lips',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Eyes',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Make Up Kits',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Cleanser',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Moisturizer',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Lip Care',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Bath',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Body',
        ));
        DB::table('kategori')->insert(array(
            'nama_kategori' => 'Hands & Feet',
        ));
    }
}

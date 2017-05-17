<?php

use Illuminate\Database\Seeder;
use App\Brand;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->delete();

        DB::table('brand')->insert(array(
            'nama_brand' => 'LAKME',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'KIEHL\'S',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'BIODERMA',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'L\'OREAL PARIS',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'KYLIE',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'MARC JACOBS',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'THEBALM',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'KYLIE KIT',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'ORIFLAME',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'NYX',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'COLORBAR',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'M.A.C',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'ETUDE',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'INNISFREE',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'MAYBELINNE NEW YORK',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'THE FACE SHOP',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'THE BODY SHOP',
        ));
        DB::table('brand')->insert(array(
            'nama_brand' => 'NYKAA',
        ));
    }
}

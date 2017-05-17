<?php

use Illuminate\Database\Seeder;
use App\Review;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		DB::table('review')->delete();

		Review::create([
			'users_id' => '1',
			'brand_id' => '1',
			'kategori_id' => '1',
			'judul' => 'kylie',
			'isi' => 'lipliplip',
			'harga' => '12300',
			'toko' => 'summarecon',
			'rating' => '1',
		]);
		    
		Review::create([
			'users_id' => '2',
			'brand_id' => '1',
			'kategori_id' => '1',
			'judul' => 'bagus pol',
			'isi' => 'buagus pol',
			'harga' => '2500',
			'toko' => 'olshopie',
			'rating' => '3',
		]);

		Review::create([
			'users_id' => '1',
			'brand_id' => '2',
			'kategori_id' => '2',
			'judul' => 'cantiknya',
			'isi' => 'bikin cantik bgt',
			'harga' => '10000',
			'toko' => 'ulalala',
			'rating' => '0',
		]);

		Review::create([
			'users_id' => '2',
			'brand_id' => '1',
			'kategori_id' => '2',
			'judul' => 'uwaaaw',
			'isi' => 'meleleh',
			'harga' => '10000',
			'toko' => 'nyam',
			'rating' => '2',
		]);

		Review::create([
			'users_id' => '1',
			'brand_id' => '2',
			'kategori_id' => '2',
			'judul' => 'terbaik',
			'isi' => 'terbaik bung',
			'harga' => '10000',
			'toko' => 'nyam',
			'rating' => '5',
		]);
    }
}

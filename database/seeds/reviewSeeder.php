<?php

use Illuminate\Database\Seeder;
use App\Review;

class reviewSeeder.php extends Seeder
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
			'product_id' => '1',
			'judul' => 'kylie',
			'isi' => 'lipliplip',
			'harga' => '12300',
			'toko' => 'summarecon',
			'rating' => '1',
		]);
		    
		Review::create([
			'users_id' => '1',
			'product_id' => '1',
			'judul' => 'kylie',
			'isi' => 'lipliplip',
			'harga' => '12300',
			'toko' => 'summarecon',
			'rating' => '1',
		]);
    }
}

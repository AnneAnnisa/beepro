<?php

use Illuminate\Database\Seeder;
use App\Foto;

class fotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foto')->delete();

		Foto::create([
			'review_id' => '1',
			'path' => '/review/1.jpg',
		]);

		Foto::create([
			'review_id' => '2',
			'path' => '/review/2.jpg',
		]);

		Foto::create([
			'review_id' => '3',
			'path' => '/review/3.jpg',
		]);

		Foto::create([
			'review_id' => '4',
			'path' => '/review/4.jpg',
		]);

		Foto::create([
			'review_id' => '5',
			'path' => '/review/5.jpg',
		]);

		Foto::create([
			'review_id' => '5',
			'path' => '/review/p1.jpg',
		]);
    }
}

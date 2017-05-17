<?php

use Illuminate\Database\Seeder;
use App\Memiliki;

class memilikiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memiliki')->delete();

		Memiliki::create([
			'review_id' => '1',
			'hashtag_id' => '1',
		]);

		Memiliki::create([
			'review_id' => '2',
			'hashtag_id' => '1',
		]);

		Memiliki::create([
			'review_id' => '1',
			'hashtag_id' => '2',
		]);

		Memiliki::create([
			'review_id' => '3',
			'hashtag_id' => '1',
		]);

		Memiliki::create([
			'review_id' => '4',
			'hashtag_id' => '1',
		]);

		Memiliki::create([
			'review_id' => '5',
			'hashtag_id' => '2',
		]);
    }
}

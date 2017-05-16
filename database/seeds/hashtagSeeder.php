<?php

use Illuminate\Database\Seeder;
use App\Hashtag;

class hashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hashtag')->delete();

        Hashtag::create([
        	'nama_hashtag' => '#kylie',
        ]);

        Hashtag::create([
        	'nama_hashtag' => '#lipkit',
        ]);

        Hashtag::create([
        	'nama_hashtag' => '#etude',
        ]);

        Hashtag::create([
            'nama_hashtag' => '#lipgloss',
        ]);

        Hashtag::create([
            'nama_hashtag' => '#viva',
        ]);
    }
}

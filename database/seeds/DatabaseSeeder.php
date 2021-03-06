<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(hashtagSeeder::class);
        $this->call(kategoriSeed::class);
        $this->call(brandSeeder::class);
        $this->call(reviewSeeder::class);

            
    }
}

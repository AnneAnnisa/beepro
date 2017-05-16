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

        Brand::create([
        	'nama_brand' => '#LAKME',
        ]);

        Brand::create([
        	'nama_brand' => '#NYKAA',
        ]);

        Brand::create([
        	'nama_brand' => '#THE BODY SHOP',
        ]);  

        Brand::create([
        	'nama_brand' => '#THE FACE SHOP',
        ]);     

        Brand::create([
        	'nama_brand' => '#MAYBELINNE NEW YORK',
        ]);

        Brand::create([
        	'nama_brand' => '#ETUDE',
        ]);

        Brand::create([
        	'nama_brand' => '#INNISFREE',
        ]);  

        Brand::create([
        	'nama_brand' => '#NYX',
        ]); 

        Brand::create([
        	'nama_brand' => '#COLORBAR',
        ]);

        Brand::create([
        	'nama_brand' => '#M.A.C',
        ]);

        Brand::create([
        	'nama_brand' => '#MARC JACOBS',
        ]);  

        Brand::create([
        	'nama_brand' => '#THEBALM',
        ]);     

        Brand::create([
        	'nama_brand' => '#KYLIE KIT',
        ]);

        Brand::create([
        	'nama_brand' => '#ORIFLAME',
        ]);

        Brand::create([
        	'nama_brand' => '#KYLIE',
        ]);  

        Brand::create([
        	'nama_brand' => '#L\'OREAL PARIS',
        ]);          

        Brand::create([
        	'nama_brand' => '#BIODERMA',
        ]);  

        Brand::create([
        	'nama_brand' => '#KIEHL\'S',
        ]); 

    }
}

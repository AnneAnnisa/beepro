<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hashtag;
use App\Product;
use App\Review;
use App\Memiliki;
use App\Brand;
use App\User;
use App\Foto;
use App\Kategori;
use DB;

class homeController extends Controller
{
    public function index1(Request $request)
    {
    	$hash=Hashtag::all();
    	$prod=Product::all();
    	$review=Review::all();
    	$memiliki=Memiliki::all();
    	$brand=Brand::all();
    	$user=User::all();
		// $user=DB::table('user')
		//         ->join('review', function ($join) {
		//             $join->on('user.id', '=', 'review.user_id');
		//         })
		//         ->get();

		// $review = DB::table('review')
		//     ->join('user', 'user.id', '=', 'review.user_id')
		//     ->join('foto', 'foto.review_id', '=', 'review.id')
		//     ->join('memiliki', 'memiliki.review_id', '=', 'review.id')
		//     ->get();

		$foto=DB::table('foto')
		        ->join('review', function ($join) {
		            $join->on('review.id', '=', 'foto.review_id');
		        })
		        ->get();


    	return view('index',['hash' => $hash, 'prod' =>$prod, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto]);
    }
}

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

class ReviewController extends Controller
{
    public function review(Request $request)
	{
   		$hashtag=Hashtag::where('id','=',$request->idhashtag)->get();
   		$memiliki=Memiliki::where('hashtag_id', '=', $request->idhashtag)->get();
   		$review=Review::where('id','=',$memiliki)->get();
   		// $foto=Foto::where('review_id','=', $review->id);
   		// $user=User::where('id','=', $review->user_id);
   		// $product=Product::where('id','=', $review->product_id);
   		// $brand=Brand::where('id','=',$product->brand_id);
   		// $kategori=Kategori::where('id','=',$product->kategori_id);
    	// $review=Review::all();
    	// $hash=Hashtag::all();
    	// $memiliki=Memiliki::all();
    	$product=Product::all();
    	$brand=Brand::all();
    	$user=User::all();
    	$kategori=Kategori::all();
    	$foto=Foto::all();

	    return view('review.isiReview',['hashtag' => $hashtag, 'product' =>$product, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori]);
	    // return view('review.isiReview',['hashtag' => $hashtag, 'memiliki' =>$memiliki]);
	}
}

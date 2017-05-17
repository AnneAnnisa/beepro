<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Hashtag;
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
        $hash=Hashtag::all()->sortByDesc('updated_at');
        $review=Review::all();
        $memiliki=Memiliki::all();
        $brand=Brand::all();
        $user=User::all();

        $foto=DB::table('foto')
               ->join('review', function ($join) {
                   $join->on('review.id', '=', 'foto.review_id');
               })
               ->get();

        return view('index',['hash' => $hash, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto]);
    }
}
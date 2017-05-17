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
        // dd(session('user')['id']);
        $foto=DB::table('foto')
               ->join('review', function ($join) {
                   $join->on('review.id', '=', 'foto.review_id');
               })
               ->get();

        return view('index',['hash' => $hash, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto]);
    }

    public function autocomplete(Request $request) 
    {
        $query = $request->get('term');
        $item = Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->get();

        if(count($item) == 0) {
            $result[] =  'Hashtag not found';
        }
        else {
            foreach($item as $key=>$value) {
            $result[] = $value->nama_hashtag;
            }
        }

        return $result;
        
    }

    public function search(Request $request) 
    {
        $query = $request->get('search');
        $item = Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->get();
        $review = Review::whereHas('memiliki', function ($result) use ($query){
            $result->join('review', 'review.id', '=', 'memiliki.review_id');    })    ->with(['memiliki' => function($result2) use ($query){
        $result2->join('hashtag', 'hashtag.id', '=', 'memiliki.hashtag_id')->where('hashtag.nama_hashtag', 'like', '%'.$query.'%');
    }])->get();

        $foto=DB::table('foto')
        ->join('review', function ($join) {
       $join->on('review.id', '=', 'foto.review_id');
        })->get();

        $brand=Brand::all();
        $user=User::all();

        return view('searchresult',[
            'review' => $review,
            'query' => $query,
            'item' => $item,
            'user' => $user,
            'foto' => $foto,
            'brand' => $brand,
        ]); 
    }
}
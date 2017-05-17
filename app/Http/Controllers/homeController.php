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
        $query = $request->get('term');
        $item = Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->get();

        if(count($item) == 0) {
            $result[] =  'Not found';
        }
        else {
            foreach($item as $key=>$value) {
            $result[] = $value->nama_hashtag;

            }
        }

        $hashtag=Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->get();
        $review=Review::where('judul','LIKE','%'.$query.'%')->get();

        // $brand=Brand::all();
        // $user=User::all();
        // $kategori=Kategori::all();
        // $foto=Foto::all();

        // return view('review.isiReviewHash',['hashtag' => $hashtag, 'review' =>$review, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori]);
        // return $result;
        dd($review);        
    }
}
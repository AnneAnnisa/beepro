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
        //dd(session('user'));
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
        $item = Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->pluck('id')->toArray();

        // foreach ($item as $key) {
        //   # code...
        //   $hashtag[$i] = $key->id;
        //   $i++;
        // }

        // $hash= Memiliki::join('memiliki','memiliki.hashtag_id','=',$item->id);

        // $i=0;
        // foreach ($result as $key) {
        //   $review = Review::get($key);
        //   $review_id[$i] = Review::where('id_review','=','')->get();
        //   $i++;
        // }
       
        // return view('searchresult',[
        //     'result' => $result,
        // ]); 

        // $result = DB::table('memiliki')->whereHas(function($result) use($query, $item) {
        //     $result->join('hashtag', 'hashtag.id', '=', 'memiliki.hashtag_id')
        //                 ->join('review', 'review.id', '=', 'memiliki.review_id')
        //                 ->where('hashtag.id', '=', $item->id);
        // })->get();

    }
}
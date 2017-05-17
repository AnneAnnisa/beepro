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
use App\Auth;

class ReviewController extends Controller
{
  public function review($isiny)
	{
   		$hashtag=Hashtag::where('id','=',$isiny)->get();
   		$memiliki=Memiliki::where('hashtag_id', '=', $isiny)->get();
   		$review=Review::where('id','=',$memiliki)->get();
   		// $foto=Foto::where('review_id','=', $review->id);
   		// $user=User::where('id','=', $review->user_id);
   		// $product=Product::where('id','=', $review->product_id);
   		// $brand=Brand::where('id','=',$product->brand_id);
   		// $kategori=Kategori::where('id','=',$product->kategori_id);
    	// $review=Review::all();
    	// $hash=Hashtag::all();
    	// $memiliki=Memiliki::all();
    	$brand=Brand::all();
    	$user=User::all();
    	$kategori=Kategori::all();
    	$foto=Foto::all();

	    return view('review.isiReviewHash',['hashtag' => $hashtag, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori]);
	    // return view('review.isiReview',['hashtag' => $hashtag, 'memiliki' =>$memiliki]);
	}

  public function brand($isinya)
  {
      $brand=Brand::where('nama_brand','=',$isinya)->get();
      $kategori=Kategori::all();
      $memiliki=Memiliki::all();
      $review=Review::all();


      $isi = DB::select("select * from kategori, foto, review, users, memiliki, hashtag, brand where review.kategori_id=kategori.id and foto.review_id=review.id and review.brand_id=brand.id and brand.nama_brand='$isinya' and review.users_id=users.id and memiliki.review_id=review.id and memiliki.hashtag_id=hashtag.id order by hashtag.updated_at, hashtag.id, foto.id");
      // dd($isi);
      $user=User::all();
      $foto=Foto::all();
      $hashtag = DB::table('hashtag')
                      ->orderBy('updated_at', 'desc')
                      ->get();
      // $tag = DB::select("select * from")
      // dd($tag);

      return view('review.isiReviewBrand',['hashtag' => $hashtag, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori, 'isi' =>$isi]);
      // return view('review.isiReview',['hashtag' => $hashtag, 'memiliki' =>$memiliki]);
  }

  public function makeupEh($isinya)
  {
      $kategori=Kategori::where('nama_kategori','=',$isinya)->get();
      $memiliki=Memiliki::all();
      $review=Review::all();


      $isi = DB::select("select * from kategori, foto, review, users, memiliki, hashtag, brand where review.kategori_id=kategori.id and foto.review_id=review.id and review.brand_id=brand.id and kategori.nama_kategori='$isinya' and review.users_id=users.id and memiliki.review_id=review.id and memiliki.hashtag_id=hashtag.id order by hashtag.updated_at, hashtag.id, foto.id");
      // dd($isi);
      $brand=Brand::all();
      $user=User::all();
      $foto=Foto::all();
      $hashtag = DB::table('hashtag')
                      ->orderBy('updated_at', 'desc')
                      ->get();
      // $tag = DB::select("select * from")
      // dd($tag);

      return view('review.isiReview',['hashtag' => $hashtag, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori, 'isi' =>$isi]);
      // return view('review.isiReview',['hashtag' => $hashtag, 'memiliki' =>$memiliki]);
  }

  public function newreview(){
    $this->data['kategori'] = DB::table('kategori')->get();
    $this->data['brand'] = DB::table('brand')->get();
    //dd($this->data['kategori']);
    return view('newreview', $this->data);

  }

  public function savenewreview(Request $request){
    $review = new Review; // bikin variabel baru utk review yg disave

    $review->users_id = 1; //db->form
    $review->judul = $request->judul; //db->form
    $review->isi = $request->isi; //db->form
    $review->toko = $request->tempat_belanja; //db->form
    $review->kategori_id = $request->kategori; //db->form
    $review->brand_id = $request->brand; //db->form
    $review->harga = $request->harga; //db->form
    $review->rating = $request->rating; //db->form
    $review->save();

    $review_id = DB::table('review')->first();
    $datahashtag = $request->hashtag;
    $arrayhashtag = explode(" ", $datahashtag);
    foreach($arrayhashtag as $data) {
      $hashtagfix = "#".$data;
      $cek = DB::select('SELECT * FROM hashtag WHERE nama_hashtag = "'.$hashtagfix.'"')[0];
      if(isset($cek)){
        $hashtag = new Hashtag;
        $hashtag->nama_hashtag = $hashtagfix;
        $hashtag->save();
      }
      $memiliki = new Memiliki;
      $memiliki->review_id = $review_id;
      $hashtag_id = DB::select('SELECT id FROM hashtag WHERE nama_hashtag = "'.$hashtagfix.'"')[0];
      $memiliki->hashtag_id = $hashtag_id;
    }
    return redirect('single');

    
    
    //$hashtag = new Hashtag;

    // 
    // $hashtag->nama_hashtag = $request->hashtag;
    // $hashtag->save();
  
  }

}

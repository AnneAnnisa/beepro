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
//use Illuminate\Support\Facades\Input;


class ReviewController extends Controller
{
    public function review($isiny)
  	{
     		$hashtag=Hashtag::where('id','=',$isiny)->get();
     		$memiliki=Memiliki::where('hashtag_id', '=', $isiny)->get();
     		$review=Review::where('id','=',$memiliki)->get();
      	$brand=Brand::all();
      	$user=User::all();
      	$kategori=Kategori::all();
      	$foto=Foto::all();

  	    return view('review.isiReviewHash',['hashtag' => $hashtag, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori]);
  	    // return view('review.isiReview',['hashtag' => $hashtag, 'memiliki' =>$memiliki]);
  	}

    public function lihatReview($isin)
    {
        $review= DB::select("select * from kategori, foto, review, users, brand where review.kategori_id=kategori.id and foto.review_id=review.id and review.brand_id=brand.id and review.id='$isin' and review.users_id=users.id");
        // dd($review);

        $hashtag=Hashtag::all();
        $memiliki= DB::select("select * from memiliki, hashtag where memiliki.review_id='$isin' and memiliki.hashtag_id=hashtag.id order by memiliki.id");
        $brand=Brand::all();
        $user=User::all();
        $kategori=Kategori::all();
        $foto=Foto::all();

        return view('review.single',['hashtag' => $hashtag, 'review' =>$review, 'memiliki' =>$memiliki, 'brand' =>$brand, 'user' =>$user, 'foto' =>$foto, 'kategori'=>$kategori]);    
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

    public function single(){
      return view('single');
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
      //dd($review);
      
      $review_id = DB::table('review')->orderby('id', 'desc')->first();
      $datahashtag = $request->hashtag;
      $arrayhashtag = explode(" ", $datahashtag);
      foreach($arrayhashtag as $data) {
        $hashtagfix = "#".$data;
        $cek = DB::select('SELECT * FROM hashtag WHERE nama_hashtag = "'.$hashtagfix.'"');
        if(isset($cek)){
          $hashtag = new Hashtag;
          $hashtag->nama_hashtag = $hashtagfix;
          $hashtag->save();
        }
        $memiliki = new Memiliki;
        $memiliki->review_id = $review_id->id;
        $hashtag_id = DB::select('SELECT id FROM hashtag WHERE nama_hashtag = "'.$hashtagfix.'"')[0];
        $memiliki->hashtag_id = $hashtag_id->id;

        $memiliki->save();
      }
      return redirect('single');  
    }

//utk edit review
    public function editreview($id)
    {
     // dd($id);
        $this->data['review'] = Review::find($id);
        $this->data['kategori'] = DB::table('kategori')->get();
        $this->data['brand'] = DB::table('brand')->get();
        $hashhashtag = DB::select('SELECT h.* FROM memiliki m, hashtag h, review r 
                                 WHERE m.hashtag_id = h.id 
                                 AND m.review_id = r.id AND r.id = '.$id);
        $rating = DB::select('SELECT rating FROM review WHERE id = "'.$id.'"');
        //dd($rating);
        //$this->data['hashtag'] = array();
        $arrayhashtag = array();
        $x = 0;
        foreach($hashhashtag as $data) {
          $arrayhashtag[$x++] = substr($data->nama_hashtag, -(strlen($data->nama_hashtag)-1));
        }
        $hashtag = '';
        foreach($arrayhashtag as $data) {
          $hashtag = $hashtag." ";
          $hashtag = $hashtag.$data;
        }
        $this->data['hashtag'] = $hashtag;

        return view('editreview', $this->data);
    }
    
    public function updatereview(Request $request, $id)
    {
        $review = Review::find($id);
        $review->judul = $request->get('judul');
        $review->isi = $request->get('isi');
        $review->toko = $request->get('tempat_belanja');
        $review->kategori_id = $request->get('kategori');
        $review->brand_id = $request->get('brand');
        $review->harga = $request->get('harga');
        $review->rating = $request->get('rating');

        $review->save();
        return redirect('listreview');
    }
    
    public function listreview(){
      return view('listreview');
    } 
    
}





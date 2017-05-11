<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id'; 
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
         'user_id', 'product_id', 'judul', 'isi', 'harga', 'toko', 'rating'
    );
    public function user(){
       return $this->belongsTo('App\User');
    }
    public function product(){
       return $this->belongsTo('App\Product');
    }

}

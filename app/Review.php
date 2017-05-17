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
         'users_id', 'brand_id', 'kategori_id', 'judul', 'isi', 'harga', 'toko', 'rating', 'lihat'
    );
    public function user(){
       return $this->hasOne('App\User');
    }
    public function brans(){
       return $this->belongsTo('App\Brand');
    }
    public function product(){
       return $this->belongsTo('App\Kategori');
    }
    public function memiliki(){
       return $this->hasMany('App\Memiliki');
    }
    public function foto(){
       return $this->hasMany('App\Foto');
    }

}

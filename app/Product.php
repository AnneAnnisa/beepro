<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id'; 
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
         'brand_id', 'kategori_id', 'nama_product'
    );
    public function brand(){
       return $this->belongsTo('App\Brand');
    }
    public function kategori(){
       return $this->belongsTo('App\Kategori');
    }
    public function review(){
       return $this->hasMany('App\Review');
    }

}

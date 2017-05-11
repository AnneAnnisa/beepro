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
         'brand_id', 'review_id', 'nama_product'
    );
    public function brand(){
       return $this->hasOne('App\Review');
    }
    public function review(){
       return $this->hasMany('App\Review');
    }

}

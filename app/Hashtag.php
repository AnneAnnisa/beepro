<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $table = 'hashtag';
    protected $primaryKey = 'id'; 
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
         'nama_hashtag'
    );
    public function memiliki(){
       return $this->hasMany('App\Memiliki');
    }
}

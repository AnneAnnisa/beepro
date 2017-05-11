<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memiliki extends Model
{
    protected $table = 'memiliki';
    protected $primaryKey = 'id'; 
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
         'hashtag_id', 'review_id'
    );
    public function hashtag(){
       return $this->belongsTo('App\Hashtag');
    }
    public function review(){
       return $this->belongsTo('App\Review');
    }
}

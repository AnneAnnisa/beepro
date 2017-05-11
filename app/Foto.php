<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id'; 
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
         'review_id', 'path'
    );
    public function review(){
       return $this->belongsTo('App\Review');
    }
}

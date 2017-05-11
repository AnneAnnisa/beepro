<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = array(
       'nama', 'email', 'password', 'path_foto', 'aboutme', 'remember_token'
    );
    public function mahasiswa_matakuliah(){
        return $this->hasMany('App\Review');
     }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//     protected $hidden = [
//         'password', 'remember_token',
//     ];
// 
}

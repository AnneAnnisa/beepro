<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    //
    public function register(Request $req)
    {
    	//dd ($req->all());
        $user = new User;
        $user->nama = $req->input('nama');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password'));

        $user->save();

        return redirect()->back();
    }
}

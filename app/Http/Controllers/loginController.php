<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;

class loginController extends Controller
{
    
   
    public function authenticate(Request $req)
    {
        $email = $req->email;
        $user = User::where('email', $req->email)->first();
        if($user)
        {
        	if(Hash::check($req->password, $user->password))
        	{
        		$datauser = array('email' => $user['email'], 'nama' => $user['nama'], 'id' => $user['id'] );
        		session(['user' => $datauser]);
        		return redirect('/home');
           	}
        }

    }

    public function logout(Request $req){
        Auth::logout();
        Session::flush();
        return Redirect('/home');
    } 
}


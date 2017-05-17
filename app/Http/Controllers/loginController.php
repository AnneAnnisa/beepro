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
    	// echo $req->input('email');
    	// echo bcrypt($req->input('password'));
        //if (Auth::attempt(['email' => $req->input('email'), 'password' => $req->input('password')])) {

            // Authentication passed...
            //echo 'asd';
            // return redirect()->intended('home');
        //}
       //return redirect()->intended('home');
        //echo 'salah';
        
        $email = $req->email;
        $user = User::where('email', $req->email)->first();
        if($user)
        {
        	if(Hash::check($req->password, $user->password))
        	{
        		        	//echo "masuk";
        		$datauser = array('email' => $user['email'], 'nama' => $user['nama'], 'id' => $user['id'] );
                // $ID = 'id'=> $user['id'];
        		// echo $user['email'];
        		//dd($datauser);
        		//$req->session()->put('user',$datauser);
        		session(['user' => $datauser]);
                //session(['id' => $ID]);
        		//dd($datauser);
        		//dd(session('user')["email"]);
        		return redirect('/home');
        

        		//return redirect::to('home');
           	}
           //	$string = bcrypt($req->password);
        // 	echo $string;
        // echo 'gamasuk';
        // dd($user);
        }

    }

    public function logout(Request $req){
        Auth::logout();
        Session::flush();
        return Redirect('/home');
    } 
}


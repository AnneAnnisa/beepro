<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hashtag;

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

    public function autocomplete(Request $request) 
    {
        $query = $request->get('term');
        $item = Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->get();

        if(count($item) == 0) {
            $result[] =  'Not found';
        }
        else {
            foreach($item as $key=>$value) {
            $result[] = $value->nama_hashtag;
            }
        }

        return $result;
        
    }

    public function search(Request $request) 
    {
        $query = $request->get('term');
        $item = Hashtag::where('nama_hashtag','LIKE','%'.$query.'%')->get();

        if(count($item) == 0) {
            $result[] =  'Not found';
        }
        else {
            foreach($item as $key=>$value) {
            $result[] = $value->nama_hashtag;

            }
        }

        return $result;
        
    }
}

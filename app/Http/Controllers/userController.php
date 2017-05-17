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


public function editprofile($id)
    {
        $data['user'] = User::find($id);
        return view('editprofile', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->nama = $request->input('nama');
        $user->email = $request->input('tanggallahir');
        $user->password = $request->input('alamat');
        //$user->telepon = $request->input('telepon');
        $user->path_foto = $request->input('hp');
        $user->aboutme = $request->input('tempatlahir');
      
        //$user->password = $request->input('password');
        $user->save();

        return redirect('users');
    }

// ----------------------------------
//     public function editprofile()
//    {
//     return view('editprofile');
//    }

//   public function savenewreview(Request $req)
//    {
//      $user = new User;
//         $user->nama = $req->input('nama');
//         $user->email = $req->input('email');
//         $user->password = bcrypt($req->input('password'));

//         $user->save();
//    }
//  ---------------------------------  
}

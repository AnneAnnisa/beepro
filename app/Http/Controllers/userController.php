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
    	// dd ($req->all(), "this is laptop");
        $user = new User;
        $user->nama = $req->input('nama');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password'));

        $user->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editprofile($id)
    {
        $user = User::find($id);
        return view('editprofile', compact('user'));

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
         $user->email = $request->input('email');
        // $user->password = $request->input('password');
        // //$user->telepon = $request->input('telepon');
        // $user->path_foto = $request->input('path_foto');
        $user->aboutme = $request->input('about_me');
      
        //$user->password = $request->input('password');
        $user->save();

        return redirect('home');
    }

  public function savenewreview(Request $req)
   {
     $user = new User;
        $user->nama = $req->input('nama');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password'));

        $user->save();
   }
   
}

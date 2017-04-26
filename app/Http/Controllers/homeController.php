<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index1(Request $request)
    {
    	return view('index');
    }
}

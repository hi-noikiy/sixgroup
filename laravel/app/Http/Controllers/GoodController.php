<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;

class GoodController extends Controller
{
	public function index(){
		 return view('Good/good');
	}


}
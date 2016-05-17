<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;

class MainController extends Controller
{
	public function index(){
		 return view('Main/main');
	}


}
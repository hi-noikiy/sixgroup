<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;

class LoginController extends Controller
{
	public function index(){
		 return view('login');
	}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function home(){
		return view('/welcome');
	}

	public function recipes(){
		return view('/recipes');
	}

	public function calendar(){
		return view('/calendar');
	}

	public function about(){
		return view('/about');
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

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

	public function pancakes(){
		$comments = Comment::All();

    	return view('/pancakes', compact('comments'));
    }


    public function storePancakes(){

    	request()->validate([
    		'comment' => 'required'
    	]);

    	Comment::create([
    		'cid' => 1, 
    		'username' => auth()->user()->name, 
    		'text' => request('comment')
    	]);

    	return redirect('/recipes/pancakes');

    }

    public function destroyPancakes($id){

    	Comment::findOrFail($id)->delete();
    	return redirect('/recipes/pancakes');
    }

    public function meatballs(){
		$comments = Comment::All();

    	return view('/meatballs', compact('comments'));
    }

    public function storeMeatballs(){

    	request()->validate([
    		'comment' => 'required'
    	]);

    	Comment::create([
    		'cid' => 2,
            'username' => auth()->user()->name,
    		'text' => request('comment')
    	]);

    	return redirect('/recipes/meatballs');

    }

    public function destroyMeatballs($id){
    	Comment::findOrFail($id)->delete();
    	return redirect('/recipes/meatballs');
    }

}

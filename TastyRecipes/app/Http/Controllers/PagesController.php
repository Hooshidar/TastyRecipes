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

    	$comment = new Comment();

    	$comment->cid = 1;
    	$comment->username = 'Admin';
    	$comment->text = request('comment');

    	$comment->save();

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

    	$comment = new Comment();

    	$comment->cid = 2;
    	$comment->username = 'Admin';
    	$comment->text = request('comment');

    	$comment->save();

    	return redirect('/recipes/meatballs');

    }

    public function destroyMeatballs($id){
    	Comment::findOrFail($id)->delete();
    	return redirect('/recipes/meatballs');
    }

}

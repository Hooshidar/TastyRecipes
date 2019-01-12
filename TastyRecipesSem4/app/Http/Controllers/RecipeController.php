<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Recipe;

class RecipeController extends Controller
{

    public function show($recipe){
        $comments = Comment::All();
        $recipes = Recipe::find($recipe);
        return view('/recipe/showrecipe', compact('recipes', 'comments'));
    }

    /*public function store($recipe){
   
    	request()->validate([
    		'comment' => 'required'
    	]);

    	Comment::create([
    		'cid' => $recipe, 
    		'username' => auth()->user()->name, 
    		'text' => request('comment')
    	]);

    	return redirect('/recipe/'.$recipe);
    }

    public function destroy($recipe, $id){

    	Comment::findOrFail($id)->delete();

        return redirect('/recipe/'.$recipe);
    }*/
  
}

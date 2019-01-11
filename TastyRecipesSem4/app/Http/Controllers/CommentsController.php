<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Recipe;

class CommentsController extends Controller
{
    public function showComment(){
    	Comment:All();
    	return response()->json();
    }

    public function storeComment(Request $request){

    	$comment = new Comment();
    	$comment->cid = $request->id;
    	$comment->username = auth()->user()->name;
    	$comment->text = $request->text;

    	$comment->save();
    	return response()->json(['success'=>'Data is successfully added']);
    }

    public function deleteComment(Request $request){
    	Comment::findOrFail($request->id)->delete();

        return response()->json();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Recipe;
use Illuminate\Support\Facades\DB;
use Auth;
use Sessions;

class CommentsController extends Controller
{
    public function index(Request $request){

        $recipe = $request->recipe;
        $comments = DB::table('comments')->where('cid', $recipe)->latest()->get();

        return json_encode($comments);
    }

    public function store(Request $request, $recipe){

        $validator = $this->validate(request(), [
            'text' => 'required'
        ]);

        //if($validator == null || $validator->passes()){
        	$comment = new Comment();
        	$comment->cid = $recipe;
        	$comment->username = auth()->user()->name;
        	$comment->text = $request->text;

        	$comment->save();
        	return response()->json(['success'=>$comment]);
        //}
        //return json_encode($validator->errors()->all());
    }

    public function destroy(Request $reguest, $recipe){
    	DB::table('comments')->where('id', '=', request("comment_id"))->delete();

        return response()->json();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function meatballs(){
    	$comments = Comment::All();

    	return view('/comments/meatballscomments', compact('comments'));
    }
}

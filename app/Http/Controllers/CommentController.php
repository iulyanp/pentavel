<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{


    function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $article = \App\Article::findOrFail(3);
        $comment = new Comment($request->all());

        $comment->user()->associate(\Auth::user());
        $comment->article()->associate($article);
        $comment->save();
        
        return Redirect::back()->with('message','Operation Successful !');
    }

}

<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentController extends Controller
{


    function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $comment = new Comment($request->all());
        
        echo '<pre>' . var_dump(\Auth::user()->comments()) . '</pre>';
        die(__FILE__ . ' ' . __Line__);
        
        return Redirect::back()->with('message','Operation Successful !');
    }

}

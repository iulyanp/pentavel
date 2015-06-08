<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TagController extends Controller {

	public function show($name){

		$tag = \App\Tag::where('name', '=', $name)->firstOrFail();
		$articles = $tag->articles()->get();
		return view('tags.show', compact('articles', 'tag'));
	}

}

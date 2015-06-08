<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function show($name) {
		$category = \App\Category::where('name', '=', $name)->firstOrFail();
		$articles = $category->articles()->get();
		return view('category.show', compact('articles', 'category'));
	}

}

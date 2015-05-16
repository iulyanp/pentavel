<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();

        return view('article.articles', compact('articles'));
    }

    public function article($id)
    {
        $article = Article::findOrFail($id);

        return view('article.article')->with('article', $article);
    }

}

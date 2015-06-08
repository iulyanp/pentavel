<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use App\Tag;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Request;

class ArticleController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return \App\Http\Controllers\ArticleController
	 */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
        $this->middleware('auth_owner', ['only' => ['edit']]);
    }


    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.articles', compact('articles'));
    }

    public function create()
    {
	    $tags = Tag::lists('name', 'id');
	    $category = Category::lists('name', 'id');

        return view('articles.create', compact('tags', 'category'));
    }

    /**
     * @param ArticleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
	    $this->createArticle( $request );

	    \Session::flash('flash_message', 'Article created');

        return redirect('articles');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show')->with('article', $article);
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
	    $tags = Tag::lists ('name', 'id');
	    $category = Category::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags', 'category'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

	    $this->syncTags( $article, $request->input('tag_list') );
	    $this->syncCategory( $article, $request->input('category_list') );

	    $article->update($request->all());

	    \Session::flash('flash_message', 'Article updated');

        return redirect('articles');
    }

    public function destroy()
    {
    }

	/**
	 * @param       $article
	 * @param array $tags
	 *
	 * @internal param ArticleRequest $request
	 */
	private function syncTags(Article $article, $tags = [] ) {
		$tags = ($tags != null) ? $tags : [];
		$article->tags()->sync( $tags );
	}

	private function syncCategory(Article $article, $categories = [] ) {
		$categories = ($categories != null) ? $categories : [];
		$article->categories()->sync( $categories );
	}

	/**
	 * @param ArticleRequest $request
	 */
	private function createArticle( ArticleRequest $request ) {
		$article = Auth::user()->articles()->create( $request->all() );

		$this->syncTags( $article, $request->input( 'tag_list' ) );
		$this->syncCategory( $article, $request->input( 'category_list' ) );

		return $article;
	}
}

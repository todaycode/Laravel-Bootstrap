<<<<<<< HEAD
<?php namespace App\Http\Controllers;

use App\News;

class NewsController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function item($id)
	{
        // Get all the blog posts
        $news = News::find($id);

        return view('site.news.view_news',compact('news'));
	}

}
=======
<?php namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', [ 'except' => [ 'index', 'show' ] ]);
	}

	public function show($id)
	{
		// Get all the blog posts
		$news = Article::find($id);

		return view('news.view_news', compact('news'));
	}

}
>>>>>>> 47d9a04... Started use of gulp and package.json for less or sass compilation.

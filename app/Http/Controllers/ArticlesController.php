<<<<<<< HEAD
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
=======
<?php

namespace App\Http\Controllers;
>>>>>>> 542a1d5... new look with meny fixes in view, controllers and models and many more

use App\Article;

class ArticlesController extends Controller {

    public function index()
    {
        $articles = Article::paginate(5);
        $articles->setPath('articles/');

        return view('article.index', compact('articles'));
    }

	public function show($slug)
	{
		$article = Article::findBySlugOrId($slug);

		return view('article.view', compact('article'));
	}

}
>>>>>>> 47d9a04... Started use of gulp and package.json for less or sass compilation.

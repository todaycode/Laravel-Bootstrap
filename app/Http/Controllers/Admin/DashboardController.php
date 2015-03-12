<<<<<<< HEAD
<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\News;
use App\NewsCategory;
use App\User;
use App\Video;
use App\VideoAlbum;
use App\Photo;
use App\PhotoAlbum;

class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $title = "Dashboard";

        $news = News::count();
        $newscategory = NewsCategory::count();
        $users = User::count();
        $photo = Photo::count();
        $photoalbum = PhotoAlbum::count();
        $video = Video::count();
        $videoalbum = VideoAlbum::count();
		return view('admin.dashboard.index',  compact('title','news','newscategory','video','videoalbum','photo',
            'photoalbum','users'));
	}
=======
<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Article;
use App\ArticleCategory;
use App\User;
use App\Video;
use App\VideoAlbum;
use App\Photo;
use App\PhotoAlbum;

class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $title = "Dashboard";

        $news = Article::count();
        $newscategory = ArticleCategory::count();
        $users = User::count();
        $photo = Photo::count();
        $photoalbum = PhotoAlbum::count();
        $video = Video::count();
        $videoalbum = VideoAlbum::count();
		return view('admin.dashboard.index',  compact('title','news','newscategory','video','videoalbum','photo',
            'photoalbum','users'));
	}
>>>>>>> 5b478dd... hotfix#67
}
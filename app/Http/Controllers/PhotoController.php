<<<<<<< HEAD
<?php namespace App\Http\Controllers;

use App\Photo;
use App\PhotoAlbum;

class PhotoController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function item($id)
	{
        $photo_album = PhotoAlbum::find($id);
        $photos = Photo::where('photo_album_id', $id)->get();

        return view('site.photo.view_album',compact('photos','photo_album'));
	}

}
=======
<?php namespace App\Http\Controllers;

use App\Photo;
use App\PhotoAlbum;

class PhotoController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function show($id)
	{
        $photo_album = PhotoAlbum::find($id);
        $photos = Photo::where('photo_album_id', $id)->get();

        return view('photo.view_album',compact('photos','photo_album'));
	}

}
>>>>>>> 47d9a04... Started use of gulp and package.json for less or sass compilation.

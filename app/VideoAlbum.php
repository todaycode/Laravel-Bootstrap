<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class VideoAlbum extends Model {
	
	protected $table = "video_album";

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function description() {
		return nl2br($this -> description);
	}

	/**
	 * Get the author.
	 *
	 * @return User
	 */
	public function author() {
		return $this -> belongsTo('App\User', 'user_id');
	}

	/**
	 * Get the galllery's videos.
	 *
	 * @return array
	 */
	public function videovideos() {
		return $this -> hasMany('App\Video');
	}
}
=======
<?php namespace App;
=======
<?php

namespace App;
>>>>>>> bfebfde... add soft delete

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoAlbum extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function description() {
		return nl2br($this -> description);
	}

	/**
	 * Get the author.
	 *
	 * @return User
	 */
	public function author() {
		return $this -> belongsTo('App\User');
	}

	/**
	 * Get the gallery's videos.
	 *
	 * @return array
	 */
	public function videos() {
		return $this -> hasMany('App\Video');
	}

    /**
     * Get the photo album's language.
     *
     * @return Language
     */
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
>>>>>>> ef337ac... Added table seeders and TestDummy for:

<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class NewsCategory extends Model {	

	protected $table = "news_category";

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
	 * Get the slider's images.
	 *
	 * @return array
	 */
	public function news() {
		return $this -> hasMany('App\News');
	}
}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class NewsCategory extends Model {	

	protected $table = "news_category";

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
	 * Get the slider's images.
	 *
	 * @return array
	 */
	public function news() {
		return $this -> hasMany('App\News');
	}

    /**
     * Get the category's language.
     *
     * @return Language
     */
    public function language()
    {
        return $this->belongsTo('App\Language', 'language_id');
    }
}
>>>>>>> ef337ac... Added table seeders and TestDummy for:

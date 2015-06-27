<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class News extends Model {

	protected $table = "news";
	/**
	 * Deletes a news.
	 *
	 * @return bool
	 */
	public function delete()
	{
		// Delete the news
		return parent::delete();
	}

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function content()
	{
		return nl2br($this->content);
	}
	 /**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function introduction()
	{
		return nl2br($this->introduction);
	}

	/**
	 * Get the post's author.
	 *
	 * @return User
	 */
	public function author()
	{
		return $this->belongsTo('App\User', 'user_id');
	}
	/**
	 * Get the post's language.
	 *
	 * @return User
	 */
	public function language()
	{
		return $this->belongsTo('App\Language', 'language_id');
	}
	
	/**
	 * Get the post's language.
	 *
	 * @return User
	 */
	public function category()
	{
		return $this->belongsTo('App\NewsCategory', 'newscategory_id');
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

class Article extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['content'];

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function content()
	{
		return nl2br($this->content);
	}

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function introduction()
	{
		return nl2br($this->introduction);
	}

	/**
	 * Get the post's author.
	 *
	 * @return User
	 */
	public function author()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	/**
	 * Get the post's language.
	 *
	 * @return Language
	 */
	public function language()
	{
		return $this->belongsTo('App\Language');
	}

	/**
	 * Get the post's category.
	 *
	 * @return ArticleCategory
	 */
	public function category()
	{
		return $this->belongsTo('App\NewsCategory');
	}

}
>>>>>>> fdc0d41... - Replaced Hash with bcrypt in UserController.php.

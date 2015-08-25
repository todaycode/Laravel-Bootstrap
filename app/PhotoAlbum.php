<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class PhotoAlbum extends Model{

	protected $table = "photo_album";
    /**
     * Deletes a gallery all
     * the associated images.
     *
     * @return bool
     */
    public function delete()
    {
        // Delete the gallery images
        $this->images()->delete();

        // Delete the gallery
        return parent::delete();
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
     * Get the post's comments.
     *
     * @return array
     */
    public function images()
    {
        return $this->hasMany('App\Photo');
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

class PhotoAlbum extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded  = array('id');

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
     * Get the post's comments.
     *
     * @return array
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
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
<<<<<<< HEAD
>>>>>>> ef337ac... Added table seeders and TestDummy for:
} 
=======
}
>>>>>>> 467ede3... Fix delete album

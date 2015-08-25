<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Photo extends Model{

	protected $table = "photo";
    /**
     * Deletes a gallery image.
     *
     * @return bool
     */
    public function delete()
    {
       // Delete the gallery image
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
     * Get the gallery for pictures.
     *
     * @return array
     */
    public function album()
    {
        return $this->belongsTo('App\PhotoAlbum');
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

class Photo extends Model
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
        return $this->belongsTo('App\User');
    }
    /**
     * Get the gallery for pictures.
     *
     * @return array
     */
    public function album()
    {
        return $this->belongsTo('App\PhotoAlbum');
    }

    /**
     * Get the photo's language.
     *
     * @return Language
     */
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
>>>>>>> ef337ac... Added table seeders and TestDummy for:

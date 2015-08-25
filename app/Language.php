<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Language extends Model {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'language';
	
	
	/**
	 * The attributes included in the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'lang_code', 'description', 'icon');
	
	/**
	 * The rules for email field, automatic validation.
	 *
	 * @var array
	*/
	private $rules = array(
			'name' => 'required|min:2',
			'lang_code' => 'required|min:2'
	);
	
	public function getImageUrl( $withBaseUrl = false )
	{
		if(!$this->icon) return NULL;
		
		$imgDir = '/images/languages/' . $this->id;
		$url = $imgDir . '/' . $this->icon;
		
		return $withBaseUrl ? URL::asset( $url ) : $url;
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

class Language extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $guarded  = array('id');

	/**
	 * The rules for email field, automatic validation.
	 *
	 * @var array
	*/
	private $rules = array(
			'name' => 'required|min:2',
			'lang_code' => 'required|min:2'
	);
	
	public function getImageUrl( $withBaseUrl = false )
	{
		if(!$this->icon) return NULL;
		
		$imgDir = '/images/languages/' . $this->id;
		$url = $imgDir . '/' . $this->icon;
		
		return $withBaseUrl ? URL::asset( $url ) : $url;
	}
>>>>>>> 5b478dd... hotfix#67
}
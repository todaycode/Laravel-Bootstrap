<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	protected $fillable = ['name', 'email', 'password'];
=======
	protected $fillable = [ 'name', 'username', 'email', 'password' ];
>>>>>>> eb9dff7... Initial work on articles resource.
=======
	protected $fillable = [ 'name', 'username', 'email', 'password', 'confirmed' ,'confirmation_code' ];
>>>>>>> 1d9b4c4... - Continued to incorporate assets into elixir workflow. Bower, gulpjs, bootstrap-sass, and font-awesome-sass now work. But, there is an issue with mix.scripts().

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	protected $hidden = ['password', 'remember_token'];

=======
	protected $hidden = [ 'password', 'remember_token' ];
=======
	protected $hidden = [ 'password', 'remember_token', 'confirmed' ,'confirmation_code'  ];
>>>>>>> 1d9b4c4... - Continued to incorporate assets into elixir workflow. Bower, gulpjs, bootstrap-sass, and font-awesome-sass now work. But, there is an issue with mix.scripts().
=======
	protected $hidden = [ 'password', 'remember_token' ,'confirmation_code'  ];
>>>>>>> fdc0d41... - Replaced Hash with bcrypt in UserController.php.


	public function roles()
	{
		return $this->belongsToMany('App\Role')->withTimestamps();
	}


	public function hasRole($name)
	{
		foreach ($this->roles as $role)
		{
			if ( $role->name == $name )
			{
				return true;
			}
		}

		return false;
	}


	public function assignRole($role)
	{
		$this->roles()->attach($role);
	}


	public function removeRole($role)
	{
		$this->roles()->detach($role);
	}


	public function articles()
	{
		return $this->hasMany('App\Article');
	}
>>>>>>> eb9dff7... Initial work on articles resource.
}

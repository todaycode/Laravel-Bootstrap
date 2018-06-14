<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
<<<<<<< HEAD
	protected $fillable = ['name', 'email', 'password'];
=======
	protected $fillable = [ 'name', 'username', 'email', 'password' ];
>>>>>>> eb9dff7... Initial work on articles resource.

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
<<<<<<< HEAD
	protected $hidden = ['password', 'remember_token'];

=======
	protected $hidden = [ 'password', 'remember_token' ];


	public function roles()
	{
		return $this->belongsToMany('Role')->withTimestamps();
	}


	public function hasRole($username)
	{
		foreach ($this->roles as $role)
		{
			if ( $role->username == $username )
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

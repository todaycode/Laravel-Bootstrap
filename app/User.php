<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    use Authenticatable, CanResetPassword;

<<<<<<< HEAD
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
=======
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
    protected $fillable = ['name', 'email', 'password'];
>>>>>>> 0df02a1... update to laravel 5.1

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

	public function articles()
	{
		return $this->hasMany('App\Article');
	}
>>>>>>> eb9dff7... Initial work on articles resource.
}

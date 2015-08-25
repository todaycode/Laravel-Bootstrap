<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

<<<<<<< HEAD
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

=======
    protected $guarded  = array('id');
>>>>>>> 542a1d5... new look with meny fixes in view, controllers and models and many more
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
<<<<<<< HEAD

	public function articles()
	{
		return $this->hasMany('App\Article');
	}
>>>>>>> eb9dff7... Initial work on articles resource.
=======
>>>>>>> 542a1d5... new look with meny fixes in view, controllers and models and many more
}

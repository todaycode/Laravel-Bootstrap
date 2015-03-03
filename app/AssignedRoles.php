<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedRoles extends Model {
    protected $guarded = array();

    public static $rules = array();
	
<<<<<<< HEAD
	protected $table = 'assigned_roles';
=======
	//protected $table = 'assigned_roles';
	protected $table = 'role_user';
>>>>>>> eb9dff7... Initial work on articles resource.


}
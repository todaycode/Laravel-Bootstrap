<<<<<<< HEAD
<?php namespace App\Http\Controllers;

class AdminController extends BaseController {

    /**
     * Initializer.
     *
     * @return \AdminController
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
        $this->middleware('admin');
    }

=======
<?php namespace App\Http\Controllers;

class AdminController extends Controller {

    /**
     * Initializer.
     *
     * @return \AdminController
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

>>>>>>> 1d9b4c4... - Continued to incorporate assets into elixir workflow. Bower, gulpjs, bootstrap-sass, and font-awesome-sass now work. But, there is an issue with mix.scripts().
}
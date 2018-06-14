<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

<<<<<<< HEAD
    public function run()
    {
        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
       	$this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('ArticleCategoriesTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('PhotoAlbumsTableSeeder');
        $this->call('PhotosTableSeeder');
        $this->call('VideoAlbumsTableSeeder');
        $this->call('VideosTableSeeder');
    }
=======
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// Add calls to Seeders here
		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('NewsCategoryTableSeeder');
		$this->call('NewsTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('TagsTableSeeder');
	}
>>>>>>> eb9dff7... Initial work on articles resource.

}
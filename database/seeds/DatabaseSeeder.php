<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

<<<<<<< HEAD
<<<<<<< HEAD
=======
	protected $faker;
	public function getFaker()
	{


		if (empty($this->faker))
		{
			$faker = Faker\Factory::create();
			$faker->addProvider(new Faker\Provider\Base($faker));
			$faker->addProvider(new Faker\Provider\Lorem($faker));
		}

		return $this->faker = $faker;
	 }
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
>>>>>>> 772c7ba... fixed issue #115
    public function run()
    {
        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('ArticleCategoriesTableSeeder');
		$this->call('ArticlesTableSeeder');
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
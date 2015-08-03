<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
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
=======
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

>>>>>>> 374f930... ModelFactory articles
        // Add calls to Seeders here
<<<<<<< HEAD
        $this->call('UsersTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('ArticleCategoriesTableSeeder');
		$this->call('ArticlesTableSeeder');
<<<<<<< HEAD
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
=======
=======
        $this->call(UserTableSeeder::class);
<<<<<<< HEAD
		$this->call(LanguagesTableSeeder::class);
		$this->call(ArticleCategoriesTableSeeder::class);
		$this->call(ArticlesTableSeeder::class);
>>>>>>> f3d147b... Merge pull request #3468 from laracasts/patch-1
=======
		$this->call(LanguageTableSeeder::class);
		$this->call(ArticleCategoryTableSeeder::class);
		$this->call(ArticleTableSeeder::class);
>>>>>>> 403e177... Align with Laravel naming convention of seeds

        Model::reguard();
    }
}
>>>>>>> 374f930... ModelFactory articles

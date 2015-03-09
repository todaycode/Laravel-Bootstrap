<<<<<<< HEAD
<?php
use Illuminate\Database\Seeder;
use App\NewsCategory;

class NewsCategoryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('news_category')->delete();
		
		$news_category = new NewsCategory();
        $news_category->language_id = 1;
        $news_category->user_id = 1;
        $news_category->title = "Lorem Ipsum";
        $news_category->save();
		
	}

}
=======
<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class NewsCategoryTableSeeder extends Seeder {

	public function run()
	{
        TestDummy::times(5)->create('App\NewsCategory');
	}

}
>>>>>>> ef337ac... Added table seeders and TestDummy for:

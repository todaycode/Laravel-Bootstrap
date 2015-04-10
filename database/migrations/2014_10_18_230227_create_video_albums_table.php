<<<<<<< HEAD:database/migrations/2014_10_18_230227_create_video_album_table.php
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoAlbumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'video_album', function(Blueprint $table){
		        $table->engine = 'InnoDB';
                $table->increments('id');
				$table->unsignedInteger('language_id');
				$table->foreign('language_id')->references('id')->on('language');
				$table->integer('position')->nullable();
                $table->string('name', 255);
                $table->text('description')->nullable();
				$table->string('folderid', 255);
				$table->unsignedInteger('user_id')->nullable();
				$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
                $table->unsignedInteger('user_id_edited')->nullable();
				$table->foreign('user_id_edited')->references('id')->on('users')->onDelete('set null');
				$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('video_album');
	}

}
=======
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoAlbumsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('video_albums', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->unsignedInteger('language_id');
			$table->foreign('language_id')->references('id')->on('languages');
			$table->integer('position')->nullable();
			$table->string('name', 255);
			$table->text('description')->nullable();
			$table->string('folder_id', 255);
			$table->unsignedInteger('user_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
			$table->unsignedInteger('user_id_edited')->nullable();
			$table->foreign('user_id_edited')->references('id')->on('users')->onDelete('set null');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('video_albums');
	}

}
>>>>>>> 5b478dd... hotfix#67:database/migrations/2014_10_18_230227_create_video_albums_table.php

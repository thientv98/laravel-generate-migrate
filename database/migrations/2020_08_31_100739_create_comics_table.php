<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comics', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title')->nullable();
			$table->string('thumb')->nullable();
			$table->text('content', 65535)->nullable();
			$table->bigInteger('author_id')->unsigned()->nullable();
			$table->string('slug')->nullable();
			$table->integer('view')->nullable()->default(0);
			$table->string('craw_comic_id')->nullable();
			$table->string('status')->nullable();
			$table->dateTime('update_chapter')->nullable();
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
		Schema::drop('comics');
	}

}

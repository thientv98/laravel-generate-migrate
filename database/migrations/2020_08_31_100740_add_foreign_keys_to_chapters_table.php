<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToChaptersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chapters', function(Blueprint $table)
		{
			$table->foreign('comic_id', 'fk_comic_id')->references('id')->on('comics')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chapters', function(Blueprint $table)
		{
			$table->dropForeign('fk_comic_id');
		});
	}

}

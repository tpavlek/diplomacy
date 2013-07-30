<?php

use Illuminate\Database\Migrations\Migration;

class AddImageLink extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('updates', function($table) {
			$table->string('img_url');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('updates', function($t) {
			$t->dropColumn("img_url");
		});
	}

}

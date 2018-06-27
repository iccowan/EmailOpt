<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailOpt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gdpr_compliance', function($table)
		{
			$table->integer('cid');
			$table->string('ip');
			$table->string('means');
			$table->string('option');
			$table->timestamps();
		});
		
		Schema::table('roster', function($table)
		{
			$table->integer('opt');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gdpr_compliance');
		Schema::dropColumn('opt');
	}

}

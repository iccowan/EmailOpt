<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrivacyPolicy extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gdpr_privacy_policy', function($table)
		{
			$table->integer('cid');
			$table->string('ip');
			$table->string('means');
			$table->string('option');
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
		Schema::drop('gdpr_privacy_policy');
	}

}

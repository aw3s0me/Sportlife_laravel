<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWliftsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wlifts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('weight');
			$table->integer('activity_id')->unsigned()->nullable()->index();
			$table->foreign('activity_id')->references('id')->on('activities');
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
		Schema::drop('wlifts');
	}

}

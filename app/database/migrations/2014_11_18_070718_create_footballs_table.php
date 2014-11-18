<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFootballsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footballs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('yel');
			$table->integer('red');
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
		Schema::drop('footballs');
	}

}

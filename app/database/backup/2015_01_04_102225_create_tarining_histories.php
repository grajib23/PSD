<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariningHistories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('training_histories',function($table){

			$table->increments('id');
			$table->integer('course_id');
			$table->string('govt_id',512);
			$table->integer('institution_id');
			$table->date('period_form');
			$table->date('period_to');
			$table->string('grade',128);
			$table->string('position');
			$table->string('location');
			$table->string('location_type',20);
			$table->integer('location_id');
			$table->string('training_type',20);

			$table->string('create_ip',128);
			$table->string('update_ip',128);
			$table->integer('create_by_id');
			$table->timestamps();
			$table->tinyInteger('is_active');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

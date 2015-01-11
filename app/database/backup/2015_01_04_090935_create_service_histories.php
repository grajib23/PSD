<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceHistories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_histories',function($table){

			$table->increments('id');
			$table->string('govt_id',128);
			$table->string('name_of_emp',128);
			$table->integer('address_id');
			$table->integer('type_of_service_id');
			$table->integer('position_id');
			$table->integer('cadre_id');
			$table->integer('national_seniority_id');
			$table->date('date_of_govt_service');
			$table->date('date_of_gazetted');
			$table->date('encaderment_date');
			$table->date('from');
			$table->date('to');

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
		Schema::drop('service_histories');
	}

}

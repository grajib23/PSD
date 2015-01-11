<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddress extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_address',function($table){

			$table->increments('id');
			$table->string('location');
			$table->integer('upzilla_id');
			$table->integer('district_id');
			$table->string('division_id',56);
			$table->integer('country_id');
			$table->string('phone_num',128);
			$table->string('mobile_num');
			$table->string('email',128);
			$table->string('address_extra',255);
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
		Schema::drop('users_address');
	}

}

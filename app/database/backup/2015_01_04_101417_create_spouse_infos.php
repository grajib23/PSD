<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpouseInfos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spouse_infos',function($table){

			$table->increments('id');
			$table->string('govt_id');
			$table->string('name_in_bangla',512);
			$table->string('name_in_english');
			$table->integer('district_id');
			$table->string('occupation',128);
			$table->string('designation',128);
			$table->string('location');
			
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
		Schema::drop('spouse_infos');
	}

}

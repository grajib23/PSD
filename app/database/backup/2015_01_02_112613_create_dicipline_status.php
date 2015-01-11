<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiciplineStatus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discipline_status',function($table){

			$table->increments('id');
			$table->string('dis_status_name');
			
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
		Schema::drop('discipline_status');
	}

}
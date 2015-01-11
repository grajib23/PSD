<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageInfos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('languages_infos',function($table){

			$table->increments('id');
			$table->string('govt_id');
			$table->integer('read');
			$table->integer('write');
			$table->integer('speak');

			$table->string('create_ip',128);
			$table->string('update_ip',128);
			$table->integer('create_by_id');
			$table->timestamps();
			$table->tinyInteger('is_active');

			//$table->unique('govt_id','govt_id_unique');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('languages_infos') ;
	}

}

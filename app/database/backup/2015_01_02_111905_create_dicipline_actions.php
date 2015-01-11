<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiciplineActions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discipline_actions',function($table){

			$table->increments('id');
			$table->string('govt_id',128);
			$table->integer('dis_cat_id');
			$table->string('description',512);
			$table->string('judgment',512);
			$table->string('final_judgment',512);
			$table->string('remarks',512);
			
			
			
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
		Schema::drop('discipline_actions');
	}

}

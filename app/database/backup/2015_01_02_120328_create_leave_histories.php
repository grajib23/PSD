<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveHistories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leave_histories',function($table){

			$table->increments('id');
			$table->integer('leave_type_id');
			$table->date('leave_form_date');
			$table->date('leave_to_date');
			$table->string('govt_id');

			$table->string('create_ip',128) ;
			$table->string('update_ip',128) ;
			$table->integer('create_by_id') ;
			$table->timestamps() ;
			$table->tinyInteger('is_active') ;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leave_histories') ;
	}

}

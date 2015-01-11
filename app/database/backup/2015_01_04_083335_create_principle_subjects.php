<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrincipleSubjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('principle_subjects',function($table){
			
			$table->increments('id');
			$table->string('subject_name');

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
		Schema::drop('principle_subjects') ;
	}

}

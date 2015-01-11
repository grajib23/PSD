<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications',function($table){
			
			$table->increments('id');
			$table->string('pub_type_id');
			$table->string('govt_id',128);
			$table->string('name_of_publication');
			$table->date('pub_date');
			
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
		Schema::drop('publications');
	}

}

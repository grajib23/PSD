<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalQualifications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educational_qualifications',function($table){

			$table->increments('id');
			$table->string('govt_id');
			$table->integer('institution_id');
			$table->string('institution_name');
			$table->integer('subject_id');
			$table->string('subject_name',128);
			$table->string('degree_id',56);
			$table->string('degree_name');
			$table->integer('result_id');
			$table->string('passing_year',128);
			$table->string('gpa');
			$table->string('distinction',128);
			
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
		Schema::drop('educational_qualifications');
	}

}

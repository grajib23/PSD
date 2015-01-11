<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationalqualificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educationalqualifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->string('institution_name',200);
			$table->integer('subject_id')->unsigned();
			$table->integer('degree_id')->unsigned();
			$table->string('result',10);
			$table->string('passing_year',128);
			$table->string('gpa');
			$table->string('distinction',128);
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
					->references('govt_id')
						->on('personalinfo')
							->onDelete('cascade');
			$table->foreign('subject_id')
					->references('id')
						->on('subjects')
							->onDelete('cascade');
			$table->foreign('degree_id')
					->references('id')
						->on('degrees')
							->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('educationalqualifications');
	}

}

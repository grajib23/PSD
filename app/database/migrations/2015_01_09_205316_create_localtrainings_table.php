<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocaltrainingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localtrainings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('course_id')->unsigned();
			$table->string('institution_name');
			$table->date('period_form');
			$table->date('period_to');
			$table->string('grade',10);
			$table->string('position',20);
			$table->string('location',200);
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
					->references('govt_id')
						->on('personalinfo')
							->onDelete('cascade');
			$table->foreign('course_id')
					->references('id')
						->on('courses')
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
		Schema::drop('localtrainings');
	}

}

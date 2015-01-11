<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravelhistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travelhistories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->string('country_name',20);
			$table->integer('purpose_id')->unsigned();
			$table->date('period_form');
			$table->date('period_to');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
					->references('govt_id')
						->on('personalinfo')
							->onDelete('cascade');
			$table->foreign('purpose_id')
					->references('id')
						->on('purposes')
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
		Schema::drop('travelhistories');
	}

}

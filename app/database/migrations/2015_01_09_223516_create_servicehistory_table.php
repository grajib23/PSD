<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicehistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicehistory', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('cadre_id')->unsigned();
			$table->integer('seniority_id')->unsigned();
			$table->date('date_of_govt_service');
			$table->date('date_of_gazetted');
			$table->date('encaderment_date');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('cadre_id')
				->references('id')
				->on('cadres')
				->onDelete('cascade');
			$table->foreign('seniority_id')
				->references('id')
				->on('nationalsenioritys')
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
		Schema::drop('servicehistory');
	}

}

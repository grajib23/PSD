<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHonourandawardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('honourandawards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',30);
			$table->string('govt_id',20);
			$table->integer('ground_id')->unsigned();
			$table->date('date');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('ground_id')
				->references('id')
				->on('grounds')
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
		Schema::drop('honourandawards');
	}

}

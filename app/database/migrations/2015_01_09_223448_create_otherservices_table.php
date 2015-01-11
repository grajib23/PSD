<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtherservicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('otherservices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->string('name_of_emp',200);
			$table->string('address',200);
			$table->integer('service_type_id')->unsigned();
			$table->integer('position_id')->unsigned();
			$table->date('from');
			$table->date('to');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('service_type_id')
				->references('id')
				->on('type_of_services')
				->onDelete('cascade');
			$table->foreign('position_id')
				->references('id')
				->on('positions')
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
		Schema::drop('otherservices');
	}

}

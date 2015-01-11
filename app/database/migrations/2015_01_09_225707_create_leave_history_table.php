<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaveHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leave_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('leave_type_id')->unsigned();
			$table->date('leave_form_date');
			$table->date('leave_to_date');
			$table->string('govt_id');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('leave_type_id')
				->references('id')
				->on('leavetypes')
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
		Schema::drop('leave_history');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalqualificationhistorysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('additionalqualificationhistory', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id');
			$table->integer('addi_qua_id')->unsigned();
			$table->longText('history_desc');
			$table->date('date');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('addi_qua_id')
				->references('id')
				->on('additionalqualifications')
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
		Schema::drop('additionalqualificationhistory');
	}

}

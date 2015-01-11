<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePowerinfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('powerinfos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('power_type_id')->unsigned();
			$table->date('notifaction_date')->nullable();
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
					->references('govt_id')
						->on('personalinfo')
							->onDelete('cascade');
			$table->foreign('power_type_id')
						->references('id')
							->on('power_types')
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
		Schema::drop('powerinfos');
	}

}

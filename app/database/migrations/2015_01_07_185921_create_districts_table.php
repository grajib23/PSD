<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistrictsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('districts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',30)->unique();
			$table->integer('division_id')->unsigned();
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('division_id')
					->references('id')
						->on('divisions')
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
		Schema::drop('districts');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpzilasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upzilas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',30)->unique();
			$table->integer('district_id')->unsigned();
			$table->boolean('is_active');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('district_id')
					->references('id')
						->on('districts')
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
		Schema::drop('upzilas');
	}

}

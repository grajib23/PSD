<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpousesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spouses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->string('name_in_bangla',100);
			$table->string('name_in_english',100);
			$table->integer('district_id')->unsigned()->nullable();
			$table->string('occupation',30)->nullable();
			$table->string('designation',30)->nullable();
			$table->longText('location');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
					->references('govt_id')
						->on('personalinfo')
							->onDelete('cascade');
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
		Schema::drop('spouses');
	}

}

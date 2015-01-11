<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pub_type_id')->unsigned();
			$table->string('govt_id',20);
			$table->string('name_of_publication');
			$table->date('pub_date');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('pub_type_id')
				->references('id')
				->on('postingtypes')
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
		Schema::drop('publications');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguageinfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('languageinfos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->boolean('read');
			$table->boolean('write');
			$table->boolean('speak');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
						->references('govt_id')
							->on('personalinfo')
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
		Schema::drop('languageinfos');
	}

}

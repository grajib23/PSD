<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostingabrodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postingabrods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('post_id')->unsigned();
			$table->integer('organization_id')->unsigned();
			$table->string('country',30);
			$table->date('period_form');
			$table->date('period_to');
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('post_id')
				->references('id')
				->on('posts')
				->onDelete('cascade');
			$table->foreign('organization_id')
				->references('id')
				->on('organizations')
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
		Schema::drop('postingabrods');
	}

}

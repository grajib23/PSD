<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostingrecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postingrecords', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('post_id')->unsigned();
			$table->integer('org_id')->unsigned();
			$table->integer('posting_type_id')->unsigned();
			$table->integer('pay_scale_id')->unsigned();
			$table->string('location');
			$table->date('start');
			$table->date('end');
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
			$table->foreign('org_id')
				->references('id')
				->on('organizations')
				->onDelete('cascade');
			$table->foreign('posting_type_id')
				->references('id')
				->on('postingtypes')
				->onDelete('cascade');
			$table->foreign('pay_scale_id')
				->references('id')
				->on('payscales')
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
		Schema::drop('postingrecords');
	}

}

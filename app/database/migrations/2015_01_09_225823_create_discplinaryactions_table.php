<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscplinaryactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discplinaryactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('dis_cat_id')->unsigned();
			$table->integer('dis_status_id')->unsigned();
			$table->longText('description');
			$table->string('judgment',200);
			$table->string('final_judgment',200);
			$table->longText('remarks',512);
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('dis_cat_id')
				->references('id')
				->on('diciplinecatatgorys')
				->onDelete('cascade');
			$table->foreign('dis_status_id')
				->references('id')
				->on('diciplinestatus')
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
		Schema::drop('discplinaryactions');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->integer('rank_id')->unsigned();
			$table->integer('promotion_type_id')->unsigned();
			$table->date('start');
			$table->date('end');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('govt_id')
				->references('govt_id')
				->on('personalinfo')
				->onDelete('cascade');
			$table->foreign('rank_id')
				->references('id')
				->on('ranks')
				->onDelete('cascade');
			$table->foreign('promotion_type_id')
				->references('id')
				->on('promotiontypes')
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
		Schema::drop('promotions');
	}

}

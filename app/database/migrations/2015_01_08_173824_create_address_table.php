<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->string('post_office',100)->nullable();
			$table->string('police_station',100)->nullable();
			$table->integer('upzila_id')->unsigned()->nullable();
			$table->longText('address_extra')->nullable();
			$table->string('phone',20)->nullable();
			$table->string('mobile',20)->nullable();
			$table->string('email',20)->nullable();
			$table->boolean('is_active');
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('upzila_id')
						->references('id')
							->on('upzilas')
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
		Schema::drop('address');
	}

}

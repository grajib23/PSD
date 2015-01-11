<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('username',128);
			$table->string('email',128);
			$table->string('phone',128);
			$table->string('national_id',128);
			$table->string('password',128);
			$table->tinyInteger('is_confirm');
			$table->tinyInteger('is_active');
			$table->integer('user_role');
			$table->string('create_ip',128);
			$table->string('update_ip',128);
			$table->string('perfrom_id',8);
			$table->timestamps();

			$table->unique('email', 'user_email_unique');
			$table->unique('national_id','user_national_id_unique');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}

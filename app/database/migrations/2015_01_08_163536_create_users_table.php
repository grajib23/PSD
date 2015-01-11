<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',30)->unique();
			$table->string('email',30)->unique();
			$table->string('national_id',20)->unique();
			$table->string('phone',15);
			$table->string('password',100);
			$table->boolean('is_confirm');
			$table->boolean('is_active');
			$table->string('user_role',20);
			$table->integer('created_by');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('childrens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('govt_id',20);
			$table->string('name_in_bangla',100);
			$table->string('name_in_english',100)->nullable();
			$table->string('gender',10)->nullable();
			$table->date('dob',100)->nullable();
			$table->date('birth_registation_num')->nullable();
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
		Schema::drop('childrens');
	}

}

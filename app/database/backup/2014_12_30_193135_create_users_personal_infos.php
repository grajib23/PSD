<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPersonalInfos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_personal_infos',function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->string('govt_id',128);
			$table->string('national_id',128);
			$table->string('name_in_bangla',512);
			$table->string('name_in_english',512);
			$table->string('fname_in_bangla',128);
			$table->string('mname_in_bangla',128);
			$table->string('mname_in_english',128);
			$table->date('DOB');
			$table->string('sex',6);
			$table->date('join_date');
			$table->string('religion',128);
			$table->dateTime('confirm_go_date');
			$table->dateTime('lpr_date');
			$table->integer('permanet_add_id');
			$table->integer('present_add_id');
			$table->integer('current_posting_id');
			$table->string('marital_stat',10);
			$table->tinyInteger('is_freedom_fighter');
			$table->tinyInteger('is_child_or_grand_child_of_freedom_fighter');
			$table->integer('service_history_id');
			$table->string('batch',64);
			$table->integer('rank_id');

			$table->tinyInteger('is_active');
			$table->string('create_ip',128);
			$table->string('update_ip',128);
			$table->string('perfrom_id',8);
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
		Schema::dropIfExists('users_personal_infos');
	}

}

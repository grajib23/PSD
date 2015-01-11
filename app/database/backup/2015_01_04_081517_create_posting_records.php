<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingRecords extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posting_records',function($table){
			
			$table->increments('id');
			$table->string('govt_id',128);
			$table->integer('post_id');
			$table->integer('org_id');
			$table->integer('posting_type_id');
			$table->integer('pay_scale_id');
			$table->integer('address_id');
		
			$table->date('join_date');
			$table->date('leave_date');


			$table->string('create_ip',128) ;
			$table->string('update_ip',128) ;
			$table->integer('create_by_id') ;
			$table->timestamps() ;
			$table->tinyInteger('is_active') ;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posting_records');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personalinfo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('govt_id',20)->unique();
			$table->string('name_in_bangla',100);
			$table->string('name_in_english',100)->nullable();
			$table->string('fname_in_bangla',100);
			$table->string('fname_in_english',100)->nullable();
			$table->string('mname_in_bangla',100);
			$table->string('mname_in_english',100)->nullable();
			$table->date('DOB')->nullable();
			$table->string('gender',6);
			$table->date('join_date')->nullable();
			$table->string('religion',20)->nullable();
			$table->date('confirm_go_date')->nullable();
			$table->integer('lpr')->unsigned();
			$table->integer('homeupzila_id')->unsigned()->nullable();
			$table->longtext('location')->nullable();
			$table->integer('cadre_id')->unsigned()->nullable();
			$table->date('cadre_date')->nullable();
			$table->integer('permanet_add_id')->unsigned()->nullable();
			$table->integer('present_add_id')->unsigned()->nullable();
			$table->integer('current_posting_id')->unsigned()->nullable();
			$table->string('marital_stat',10)->nullable()->nullable();
			$table->boolean('is_freedom_fighter');
			$table->boolean('is_child_or_grand_child_of_freedom_fighter');
			$table->string('batch',64)->nullable();
			$table->longText('workfield_option');
			$table->integer('rank_id')->unsigned()->nullable();
			$table->boolean('is_active');
			$table->integer('created_by')->nullable();
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('user_id')
						->references('id')
							->on('users')
								->onDelete('cascade');
			$table->foreign('homeupzila_id')
						->references('id')
							->on('upzilas')
								->onDelete('cascade');
			$table->foreign('cadre_id')
						->references('id')
							->on('Cadres')
								->onDelete('cascade');

			$table->foreign('permanet_add_id')
						->references('id')
							->on('address')
								->onDelete('cascade');
			$table->foreign('present_add_id')
						->references('id')
							->on('address')
								->onDelete('cascade');
			$table->foreign('current_posting_id')
						->references('id')
							->on('upzilas')
								->onDelete('cascade');
			$table->foreign('rank_id')
						->references('id')
							->on('ranks')
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
		Schema::drop('personalinfo');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersAuthTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers_auth', function(Blueprint $table)
		{
			$table->integer('uid', true);
			$table->string('name', 50);
			$table->string('email', 50);
			$table->string('rut', 100);
			$table->string('password', 200);
			$table->string('address', 50);
			$table->string('city', 50);
			$table->timestamp('created')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers_auth');
	}

}

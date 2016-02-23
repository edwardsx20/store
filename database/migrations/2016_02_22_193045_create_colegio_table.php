<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColegioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colegio', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('rbd')->nullable()->default(0);
			$table->string('nombre', 200)->nullable()->default('0');
			$table->string('plataforma', 200)->nullable()->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colegio');
	}

}

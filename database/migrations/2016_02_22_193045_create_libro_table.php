<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titulo', 100);
			$table->string('nivel', 10)->nullable();
			$table->string('asignatura', 80)->nullable();
			$table->string('proyecto', 80)->nullable();
			$table->integer('precio');
			$table->string('portada')->nullable()->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('libro');
	}

}

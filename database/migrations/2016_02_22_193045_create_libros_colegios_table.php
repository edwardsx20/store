<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosColegiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros_colegios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('libro_id')->nullable();
			$table->integer('colegio_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('libros_colegios');
	}

}

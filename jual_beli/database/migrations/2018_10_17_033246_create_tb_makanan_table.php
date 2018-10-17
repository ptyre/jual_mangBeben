<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbMakananTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_makanan', function(Blueprint $table)
		{
			$table->increments('id_makanan');
			$table->string('nama', 50);
			$table->text('pathGambar', 65535);
			$table->text('deskripsi', 65535);
			$table->integer('harga');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_makanan');
	}

}

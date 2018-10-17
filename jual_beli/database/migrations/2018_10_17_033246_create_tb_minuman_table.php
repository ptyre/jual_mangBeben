<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbMinumanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_minuman', function(Blueprint $table)
		{
			$table->integer('id_minuman', true);
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
		Schema::drop('tb_minuman');
	}

}

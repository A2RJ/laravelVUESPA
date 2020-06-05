<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAktivitasTable extends Migration {

	public function up()
	{
		Schema::create('aktivitas', function(Blueprint $table) {
			$table->integer('id_aktivitas')->autoIncrement();
			$table->string('aktivitas', 50);
		});
	}

	public function down()
	{
		Schema::dropIfExists('aktivitas');
	}
}
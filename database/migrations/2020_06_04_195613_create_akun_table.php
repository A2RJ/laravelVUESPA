<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAkunTable extends Migration {

	public function up()
	{
		Schema::create('akun', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_akun');
			$table->foreign('id_akun')->references('id_aktivitas')->on('aktivitas');
			$table->string('no_akun', 5);
			$table->string('akun', 40);
			$table->string('debet', 50);
			$table->string('kredit', 50);
			$table->string('keterangan', 6);
		});
	}

	public function down()
	{
		Schema::dropIfExists('akun');
	}
}

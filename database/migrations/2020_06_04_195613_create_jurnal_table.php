<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurnalTable extends Migration {

	public function up()
	{
		Schema::create('jurnal', function(Blueprint $table) {
			$table->increments('id');
			$table->string('id_aktivitas', 50);
			$table->string('jangka_waktu', 20)->nullable();
			$table->string('no_akun', 5);
			$table->text('keterangan');
			$table->string('jum_debet', 32);
			$table->string('jum_kredit', 32);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::dropIfExists('jurnal');
	}
}
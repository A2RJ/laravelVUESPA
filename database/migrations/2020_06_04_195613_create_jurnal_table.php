<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurnalTable extends Migration {

	public function up()
	{
		Schema::create('jurnal', function(Blueprint $table) {
			$table->increments('id');
			$table->string('aktivitas', 50);
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
		Schema::drop('jurnal');
	}
}
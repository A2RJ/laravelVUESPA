<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_aktivitas')->unique('id_aktivitas');
            $table->integer('jangka_waktu')->nullable()->unique('jangka_waktu');
            $table->string('no_akun', 5)->unique('no_akun');
            $table->text('keterangan');
            $table->string('jum_debet', 32);
            $table->string('jum_kredit', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnal');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJangkaWaktuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jangka_waktu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_jangka_waktu')->index('jangka_waktu_id_jangka_waktu_foreign');
            $table->string('jangka_waktu', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jangka_waktu');
    }
}

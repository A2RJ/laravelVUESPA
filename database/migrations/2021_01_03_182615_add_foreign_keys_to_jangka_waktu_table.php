<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJangkaWaktuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jangka_waktu', function (Blueprint $table) {
            $table->foreign('id_jangka_waktu')->references('id_aktivitas')->on('aktivitas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jangka_waktu', function (Blueprint $table) {
            $table->dropForeign('jangka_waktu_id_jangka_waktu_foreign');
        });
    }
}

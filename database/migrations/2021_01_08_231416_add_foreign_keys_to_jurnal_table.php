<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jurnal', function (Blueprint $table) {
            $table->foreign('id_aktivitas', 'jurnal_ibfk_1')->references('id_aktivitas')->on('aktivitas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('jangka_waktu', 'jurnal_ibfk_2')->references('id')->on('jangka_waktu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('no_akun', 'jurnal_ibfk_3')->references('no_akun')->on('akun')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jurnal', function (Blueprint $table) {
            $table->dropForeign('jurnal_ibfk_1');
            $table->dropForeign('jurnal_ibfk_2');
            $table->dropForeign('jurnal_ibfk_3');
        });
    }
}

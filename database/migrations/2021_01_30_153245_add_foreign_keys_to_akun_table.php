<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akun', function (Blueprint $table) {
            $table->foreign('id_aktivitas')->references('id_aktivitas')->on('aktivitas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('akun', function (Blueprint $table) {
            $table->dropForeign('akun_id_aktivitas_foreign');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilIdToKomentarJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('profil_id');

            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);
        });
    }
}

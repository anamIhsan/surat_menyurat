<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutgoingLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_letters', function (Blueprint $table) {
            $table->id();
            $table->string('teruskan_kepada');
            $table->string('no_surat');
            $table->string('perihal');
            $table->date('tanggal_keluar');
            $table->integer('klasifikasi_surat_id');
            $table->integer('sifat_surat_id');
            $table->string('catatan');
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
        Schema::dropIfExists('outgoing_letters');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_letters', function (Blueprint $table) {
            $table->id();
            $table->string('dari');
            $table->string('no_surat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_diteruskan');
            $table->string('perihal');
            $table->integer('klasifikasi_surat_id');
            $table->integer('sifat_surat_id');
            $table->string('isi_ringkas');
            $table->string('catatan');
            $table->string('lampiran_surat');
            $table->string('diterima')->nullable();
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
        Schema::dropIfExists('incoming_letters');
    }
}

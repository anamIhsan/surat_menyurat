<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositions', function (Blueprint $table) {
            $table->id();
            $table->integer('surat_masuk_id');
            $table->integer('master_harap_id')->nullable();
            $table->integer('users_id')->nullable();
            $table->string('catatan_adminTU')->nullable();
            $table->string('catatan_kepalaDinas')->nullable();
            $table->enum('verifikasi', ['Sudah', 'Belum'])->default('Belum')->nullable();
            $table->date('tanggal_verifikasi')->nullable();
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
        Schema::dropIfExists('dispositions');
    }
}

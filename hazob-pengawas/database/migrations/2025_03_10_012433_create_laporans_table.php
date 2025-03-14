<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('no_id');
            $table->string('posisi');
            $table->string('divisi');
            $table->dateTime('datetime');
            $table->string('lokasi');
            $table->string('golden');
            $table->string('unsafe');
            $table->string('safe');
            $table->string('cuaca');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('laporans');
    }
};

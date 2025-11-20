<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('nilais', function (Blueprint $table) {
        $table->id();
        $table->string('nama_mahasiswa');
        $table->string('matakuliah');
        $table->integer('nilai');
        $table->timestamps();
    });
}

};

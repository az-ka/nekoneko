<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik', 100);
            $table->string('no_hp', 13);
            $table->longText('alamat');
            $table->string('nama_peliharaan', 100);
            $table->enum('jekel', ['jantan', 'betina']);
            $table->integer('umur')->nullable();
            $table->integer('berat')->nullable();
            $table->float('suhu')->nullable();
            $table->char('penyakit_id', 4);
            $table->float('presentase');

            $table->timestamps();
            $table->foreign('penyakit_id')->references('id')->on('penyakit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosas');
    }
};

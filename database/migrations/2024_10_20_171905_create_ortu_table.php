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
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->text('alamat')->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('kode_pos', 10)->nullable();
            $table->string('nomor_telepon_ayah', 15)->nullable();
            $table->string('nomor_telepon_ibu', 15)->nullable();
            $table->string('email_ayah', 100)->nullable();
            $table->string('email_ibu', 100)->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pekerjaan_ayah', 50)->nullable();
            $table->string('pekerjaan_ibu', 50)->nullable();
            $table->string('pendidikan_terakhir_ayah', 50)->nullable();
            $table->string('pendidikan_terakhir_ibu', 50)->nullable();
            $table->enum('status_pernikahan', ['Menikah', 'Cerai', 'Janda', 'Duda'])->nullable();
            $table->date('tanggal_pernikahan')->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tua');
    }
};

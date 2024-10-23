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
        Schema::create('table_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->index(); // Index untuk mempercepat pencarian judul
            $table->string('penulis');
            $table->foreignId('kategori_id')->constrained('categories')->onDelete('cascade'); // Relasi ke tabel kategori
            $table->string('penerbit');
            $table->string('isbn')->unique(); // ISBN unik untuk setiap buku
            $table->integer('harga');
            $table->integer('jumlah_halaman');
            $table->date('tgl_terbit');
            $table->integer('stok')->default(0); // Stok buku tersedia
            $table->enum('status', ['tersedia', 'dipinjam', 'rusak', 'hilang'])->default('tersedia'); // Status buku
            $table->string('bahasa')->nullable(); // Bahasa buku
            $table->text('deskripsi')->nullable(); // Deskripsi buku
            $table->string('cover_image')->nullable(); // URL atau path gambar cover buku
            $table->timestamps();
        });
    }


    //  {
    //     if (!Schema::hasTable('table_buku')) {
    //         Schema::create('table_buku', function (Blueprint $table) {
    //             $table->id();
    //             $table->string('judul');
    //             $table->string('penulis');
    //             $table->foreignId('kategori_id')->constrained()->onDelete('cascade');
    //             $table->string('penerbit');
    //             $table->string('isbn')->unique();
    //             $table->integer('harga');
    //             $table->integer('jumlah_halaman');
    //             $table->date('tgl_terbit');
    //             $table->integer('stok')->default(0);
    //             $table->enum('status', ['tersedia', 'dipinjam', 'rusak', 'hilang'])->default('tersedia');
    //             $table->string('bahasa')->nullable();
    //             $table->text('deskripsi')->nullable();
    //             $table->string('cover_image')->nullable();
    //             $table->timestamps();
    //         });
    //     }
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_buku');
    }
};

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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->char('kode', length: 100)->unique();
            $table->string('namabrg');
            $table->string('kategori')->default('NONE');
            $table->string('satuan')->default('PCS');
            $table->integer('hbeli')->default(0);
            $table->integer('hjual')->default(0);
            $table->integer('qawal')->default(0);
            $table->integer('qbeli')->default(0);
            $table->integer('qjual')->default(0);
            $table->integer('qakhir')->default(0);
            $table->integer('restock')->default(0);
            $table->integer('rpawal')->default(0);
            $table->integer('rpbeli')->default(0);
            $table->integer('rpjual')->default(0);
            $table->integer('rpakhir')->default(0);
            $table->char('tipe_kode')->default('sistem');
            $table->string('gambar')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};

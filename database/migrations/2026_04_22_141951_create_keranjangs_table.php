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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->default('1');
            $table->string('nota_keranjang')->default('101');
            $table->char('kode', length: 100);
            $table->string('namabrg')->default('1');;
            $table->string('kategori')->default('BEBAS');
            $table->string('satuan')->default('PCS');
            $table->integer('hbeli')->default(0);
            $table->integer('hjual')->default(0);
            $table->integer('qty')->default(0);
            $table->integer('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};

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
            $table->string('userid')->default('1');
            $table->char('kode', length: 100);
            $table->string('namabrg')->default('1');;
            $table->string('kategori')->default('NONE');
            $table->string('satuan')->default('PCS');
            $table->integer('hbeli')->default(0);
            $table->integer('hjual')->default(0);
            $table->integer('qtyjual')->default(0);
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

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
        Schema::create('tb_comuna', function (Blueprint $table) {
        $table->integer('comu_codi')->primary();
        $table->string('comu_nomb', 30);
        $table->integer('muni_codi');
        $table->foreign('muni_codi')->references('muni_codi')->on('tb_municipio');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_comuna');
    }
};

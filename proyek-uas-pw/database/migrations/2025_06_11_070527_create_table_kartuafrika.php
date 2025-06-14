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
        Schema::create('kartuafrika', function (Blueprint $table) {
            $table->id();
            $table->string('negara_afrika');
            $table->string('image_afrika');
            $table->string('deskripsi_afrika');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartuafrika');
    }
};

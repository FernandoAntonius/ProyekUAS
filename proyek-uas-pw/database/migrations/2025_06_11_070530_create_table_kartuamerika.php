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
        Schema::create('kartuamerika', function (Blueprint $table) {
            $table->id();
            $table->string('negara_amerika');
            $table->string('image_amerika');
            $table->string('deskripsi_amerika');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartuamerika');
    }
};

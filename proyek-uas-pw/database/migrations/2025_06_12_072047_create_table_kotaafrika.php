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
        Schema::create('kotaafrika', function (Blueprint $table) {
            $table->id();
            $table->string('kota_afrika');
            $table->string('image_kota_afrika');
            $table->string('deskripsi_kota_afrika');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotaafrika');
    }
};

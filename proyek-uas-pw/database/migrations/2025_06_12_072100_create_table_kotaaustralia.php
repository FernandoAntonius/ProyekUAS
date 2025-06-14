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
        Schema::create('kotaaustralia', function (Blueprint $table) {
            $table->id();
            $table->string('kota_australia');
            $table->string('image_kota_australia');
            $table->string('deskripsi_kota_australia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotaaustralia');
    }
};

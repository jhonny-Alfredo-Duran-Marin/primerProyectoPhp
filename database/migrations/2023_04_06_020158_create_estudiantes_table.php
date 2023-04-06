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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('nombre');
            $table->string('registro');
            $table->string('carrera');
        });
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};

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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_completo", 100);
            $table->string("apellido",100)->nullable();
            $table->string("fecha_nacimiento")->nullable();

            // relacion (1:1)
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

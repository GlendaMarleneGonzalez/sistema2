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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("noctrl",8)->unique();
            $table->string("nombre",50);
            $table->string("apellidop", 50);
            $table->string("apellidom",50);
            $table->string("sexo",1);
            $table->string("email",200);
            //$table->foreingId("carrera_id")->constrained();
                $table->unsignedBigInteger('carrera_id');
 
                $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};

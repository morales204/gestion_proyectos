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
        //
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id_proyecto');
            $table->String('nombre_proyecto');
            $table->Date('inicio_proyecto');
            $table->Date('fin_proyecto');
            $table->String('descripcion_proyecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

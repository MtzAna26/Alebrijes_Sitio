<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mascotas', function (Blueprint $table) {
        $table->id();
        $table->date('fecha_consulta');
        $table->string('nombre_mascota');
        $table->string('nombre_propietario');
        $table->string('sexo');
        $table->string('raza');
        $table->string('especie');
        $table->string('color_mascota');
        $table->text('senas_particulares')->nullable();
        $table->text('alergias')->nullable();
        $table->boolean('esterilizado');
        $table->text('enfermedades_previas')->nullable();
        $table->text('notas')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};

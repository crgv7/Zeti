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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('clients_id');
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade');

            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

            $table->integer("codigo_de_UEB");
            $table->integer("Year");
            $table->string("No_contrato",120);
            $table->string("Tipo_de_contrato",120);
            $table->string("Actividad",120);
            $table->string("Centro_de_Negocio",10);
            $table->string("Oferente",120);
            $table->double("Monto_de_Contrato_en_CUP");
            $table->dateTime("Fecha_de_Inicio");
            $table->dateTime("Fecha_Fin");
            $table->dateTime("Fecha_Real_de_Inicio");
            $table->dateTime("Vigencia",120);
            $table->string("Organismo",7);
            $table->double("Valor_Ejecutado");
            $table->double("Monto_disponible");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};

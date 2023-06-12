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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('genero');
            $table->string('celular');
            $table->string('horarios_atendimento');
            $table->boolean('operado');
            $table->string('pais');
            $table->string('estado');
            $table->string('cidade');
            $table->date('data_nascimento');
            $table->boolean('viagem');
            $table->float('altura');
            $table->float('peso');
            $table->boolean('oculos');
            $table->boolean('silicone_peito');
            $table->boolean('silicone_bunda');
            $table->string('tamanho_peito');
            $table->string('tamanho_bunda');
            $table->string('valor_hora');
            $table->boolean('possui_local_encontro');
            $table->string('local_encontro');
            $table->string('cor_pele');
            $table->string('cor_cabelo');
            $table->string('estilo_cabelo');
            $table->boolean('tatuagens');
            $table->boolean('piercing');
            $table->boolean('gravar_video');
            $table->boolean('tirar_fotos');
            $table->string('fotos');
            $table->string('videos');
            $table->string('descricao');
            $table->string('cor_olhos');
            $table->boolean('silicone');
            $table->string('nacionalidade');
            $table->string('idiomas');
            $table->string('servicos');
            $table->string('formas_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};

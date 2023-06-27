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
            #Dados Pessoais
            #$table->id();
            $table->string('nome');
            $table->string('description', 255);
            $table->string('Estado');
            /*$table->integer('preco');
            $table->string('moedas');
            $table->string('formas_pagamento');
            $table->string('email');
            $table->string('celular');
            #Corpo
            $table->string('etinia');
            $table->string('estilo_corpo');
            $table->float('altura');
            $table->float('peso');
            $table->boolean('deficiente');
            $table->string('genero');
            $table->string('sexualidade');
            $table->date('data_nascimento');
            $table->boolean('cicatriz');
            $table->string('cor_olhos');
            $table->string('cor_cabelo');
            $table->string('estilo_cabelo');*/
            #Atributos
            $table->boolean('tatuagem');
            /*$table->boolean('piercing');
            $table->boolean('oculos');
            $table->string('silicone');
            $table->string('tamanho_peitos');
            $table->string('estilo_peitos');
            $table->string('tamanho_bunda');
            $table->string('estilo_bunda');
            $table->boolean('fumante');
            $table->boolean('viagem');
            $table->boolean('tirar_fotos');
            $table->boolean('gravar_videos');*/
            $table->timestamps();
            #Horários de atendimento
            /*$table->string('domingo');
            $table->string('segunda');
            $table->string('terca');
            $table->string('quarta');
            $table->string('quinta');
            $table->string('sexta');
            $table->string('sabado');*/
            #Verificar Conta 
            $table->boolean('verificada')->default(0);
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

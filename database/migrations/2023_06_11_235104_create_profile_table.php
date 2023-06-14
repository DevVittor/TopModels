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
            $table->id(); #vai ser a hastag do nome estilo discord vittor#12323
            $table->string('nome', 255); #nome,sobrenome
            $table->string('categoria'); #Novinha(18-25),jovem(25-30),adulta(30-40),milf(40-50),coroa(50-60),idosa(70+)
            $table->string('corpo'); #magro,normal,Modelado,sarada, Musculusa,Gordinha,GG
            $table->string('genero'); #Masculino, feminino, trans
            $table->string('celular'); #(21)xxxxxxx-xxx
            $table->string('horarios_atendimento'); #segunda á sexta das 08:00 as 19:00
            $table->boolean('operado'); #sim ou não caso marque a opção de ser trans
            $table->string('estado'); #Escolha o estado que reside no momento
            $table->string('cidade'); #Caso escolha o estado de são paulo só vai aparecer cidades de são paulo
            $table->date('data_nascimento'); #vai ser necessário para calcular o dia do cadastro e a data de nascimento para saber se é igual ou mais de 18 anos
            $table->boolean('viagem'); #se aceita viajar a trabalho ou não
            $table->float('altura'); #Digite a sua altura atual
            $table->float('peso'); #Seu peso atual
            $table->boolean('oculos'); #Se usa oculos ou não
            $table->boolean('silicone_peito'); #Se possui silicone do seio
            $table->boolean('silicone_bunda'); #Se possui silicone da bunda
            $table->string('tamanho_peito'); #e caso tenha qual o tamanho dele (pequeno, medio, grande, gigante)
            $table->string('tamanho_bunda'); #e caso tenha qual o tamanho dele (pequeno, medio, grande, gigante)
            $table->string('valor_hora'); #quanto cobra a hora
            $table->boolean('possui_local_encontro'); #Se tem um local de encontro ou se encontro a domicilio
            $table->string('local_encontro'); #e caso tenho o local de encontro aonde é 
            $table->string('etnias'); #se é negra, branca, parda, indigena ou asiatica
            $table->string('cor_cabelo'); #escuro,branco,grisalho,loiro,colorido,vermelho,azul,ruiva,castanho, outros
            $table->string('estilo_cabelo'); #estilo de cabelo se é (curto,longo,enrolado,crespo,raspado,careca,trançado)
            $table->boolean('tatuagens'); #sim ou não
            $table->boolean('piercing'); #sim ou não
            $table->boolean('gravar_video'); #sim ou não
            $table->boolean('tirar_fotos'); #sim ou não
            $table->string('fotos'); #até 5 fotos 
            $table->string('videos'); #3 vídeos de 30 segundos
            $table->string('descricao'); #conte um pouco sobre você
            $table->string('cor_olhos'); #a cor dos seus olhos 
            $table->string('moedas'); #Qual tipo de moeda aceita se paga(real,libra,euro,dolar,yenes,bitcoin)
            $table->string('nacionalidade'); #qual páis você nasceu
            $table->string('idiomas'); #quais os idiomas você sabe falar
            $table->string('servicos'); #qual o tipo de serviço você topa fazer
            $table->string('formas_pagamento'); #quais formas de pagamento você aceita
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

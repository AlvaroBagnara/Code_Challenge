<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cep');
            $table->string('estado');
            $table->string('cidade');
            $table->timestamps();
        });
        
        Schema::table('enderecos',function(Blueprint $table){
            $table->foreignId('id_cliente')->references('id')->on('clientes')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enderecos', function(Blueprint $table){
            $table->foreignId('id_cliente')
            ->constrained()
            ->onDelete('cascade');
        });
    }
}

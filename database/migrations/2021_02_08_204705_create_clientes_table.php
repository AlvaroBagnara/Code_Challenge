<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->decimal('telefone',$precision = 11,$scale = 0);
            $table->char('sexo',1)->default("n");
            
            $table->timestamps();
        });
        // 1. Nome completo
        // 2. E-mail
        // 3. Telefone
        // 4. Sexo (não obrigatório)
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

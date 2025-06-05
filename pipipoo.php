<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\ApiModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table)  {
            $table->id();
            $table->string('nomeUsu');
            $table->string('CpfUsu');
            $table->float('alturaUsu');
            $table->float('pesoUsu');
            $table->string('senhaUsu');
            $table->string('emailUsu');
            $table->string('nomeImagemUsu');
            $table->date('dataNascUsu');
            
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

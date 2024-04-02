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
        Schema::create('contato', function(Blueprint $table){
            $table->id();
            $table->string('nome',20);
            $table->string('sobrenome',30);
            $table->date('data_de_nascimento');
            $table->string('telefone',20);
            $table->string('celular',20);
            $table->string('email',50);
            $table->foreignId('empresa_id')->constrained('empresa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contato');
    }
};

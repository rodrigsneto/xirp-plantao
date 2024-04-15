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
        Schema::create('dutyservices', function (Blueprint $table) {
            $table->id();
            $table->integer('id_duty');
            $table->string('cliente');
            $table->string('requisitante');
            $table->string('contato');
            $table->string('assunto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dutyservices');
    }
};

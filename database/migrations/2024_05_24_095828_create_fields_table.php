<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('nome_campo', 100);
            $table->unsignedTinyInteger('coperto');//true=1 or false=0
            $table->string('tipo_manto', 100);
            $table->unsignedTinyInteger('illuminazione');//true=1 or false=0
            $table->string('colore_campo', 100);
            $table->tinyInteger('costo');
            $table->string('image', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
};

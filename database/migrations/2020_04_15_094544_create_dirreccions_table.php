<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirreccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Calle',50)->nullable();
            $table->string('numero',50)->nullable();
            $table->string('sector',50)->nullable();
            $table->string('provincia',50)->nullable();
            $table->string('telefono',12)->nullable();
            $table->string('celular',12)->nullable();
            $table->string('referencia',125)->nullable();
            $table->string('estado',10)->nullable();
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
        Schema::dropIfExists('dirreccions');
    }
}

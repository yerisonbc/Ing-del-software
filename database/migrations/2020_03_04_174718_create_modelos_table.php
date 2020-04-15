<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo',25);
            $table->string('descripcion',25)->nullable();
            $table->unsignedBigInteger('id_marca');
            $table->unsignedBigInteger('user_ins');
            $table->unsignedBigInteger('user_udt')->nullable();
            $table->timestamps();
            $table->string('estado', 10);

            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('user_ins')->references('id_user')->on('perfil_usuarios')->onDelete('cascade');
            $table->foreign('user_udt')->references('id_user')->on('perfil_usuarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('modelos');
    }
}

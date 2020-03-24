<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_productos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_producto');
            $table->string('foto');
            $table->unsignedBigInteger('user_ins');
            $table->unsignedBigInteger('user_udt')->nullable();
            $table->timestamps();
            $table->char('estado');

            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('fotos_produtos');
    }
}

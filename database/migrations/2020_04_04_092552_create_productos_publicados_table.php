<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosPublicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_publicados', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('titulo', 50);
            // $table->string('subtitulo', 50)->nullable;

            // $table->string('descripcion');
            // $table->string('pantalla', 25)->nullable;
            // $table->string('procesador', 25)->nullable;
            // $table->string('almacenamiento', 10)->nullable;
            // $table->string('camara', 25)->nullable;
            // $table->string('bateria', 25)->nullable;

            // $table->integer('cantidad');
            // $table->integer('precio');

            // $table->unsignedBigInteger('user_ins');
            // $table->unsignedBigInteger('user_udt')->nullable();
            // $table->unsignedBigInteger('id_proveedor');
            $table->timestamps();
            // $table->string('estado');

            // $table->foreign('id_proveedor')->references('id')->on('proveedor')->onDelete('cascade');
            // $table->foreign('user_ins')->references('id_user')->on('perfil_usuarios')->onDelete('cascade');
            // $table->foreign('user_udt')->references('id_user')->on('perfil_usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_publicados');
    }
}

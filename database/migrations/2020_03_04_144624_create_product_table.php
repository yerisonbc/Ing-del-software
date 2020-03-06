<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('producto', 25);
            $table->string('caracteristica', 125);
            $table->integer('precio');
            $table->integer('cantidad');


            $table->unsignedBigInteger('id_marca');
            $table->unsignedBigInteger('id_modelo');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('user_ins');
            $table->unsignedBigInteger('user_udt');
            $table->timestamps();
            $table->char('estado');

            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('id_modelo')->references('id')->on('modelos')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('id_proveedor')->references('id')->on('proveedor')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}

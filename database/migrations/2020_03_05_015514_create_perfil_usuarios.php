<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->primary("id_user");
            $table->string('nombre', 25);
            $table->string('apellido', 25);
            $table->string('direccion', 50)->nulleble();
            $table->string('telefono', 50)->nulleble();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_usuarios');
    }
}

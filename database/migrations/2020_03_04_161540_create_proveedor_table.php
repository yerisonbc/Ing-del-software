<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',25 );
            $table->string('telefono', 12);
            $table->string('correo',50);
            $table->string('pagina_web', 50)->nullable();
            $table->unsignedBigInteger('user_ins');
            $table->unsignedBigInteger('user_udt');
            $table->timestamps();
            $table->string('estado',10);


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
        Schema::dropIfExists('proveedor');
    }
}

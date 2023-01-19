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
        //
        Schema::create('usuarios', function(Blueprint $table){
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('pais',100);
            $table->string('email',150);
            $table->string('direccion',180);
            $table->string('celular',10);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('usuarios');
    }
};

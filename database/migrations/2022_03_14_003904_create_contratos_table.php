<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->unsignedInteger('idCliente')->nullable();
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');

            $table->unsignedInteger('usuario')->nullable();
            $table->foreign('usuario')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('idProducto')->nullable();
            $table->foreign('idProducto')->references('id')->on('producto')->onDelete('cascade');

            /* foráneas
                idCliente
                idUsuario
                idProducto
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fechaTentativa')->nullable();
            $table->timestamp('fechaContacto')->nullable();
            $table->text('descripAcuerdo');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->unsignedInteger('usuario')->nullable();
            $table->foreign('usuario')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('idCliente')->nullable();
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre', 30);
            $table->string('Apellido');
            $table->string('Email');
            $table->integer('Telefono');
            $table->integer('Cantidad');
            $table->date('Fecha');
            $table->string('Comentario');
            $table->string('Type_Coffee');
            $table->string('Size');
            $table->string('Extra');
            $table->string('Dulzor');
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}

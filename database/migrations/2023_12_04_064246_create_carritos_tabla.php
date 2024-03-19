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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->string('descripcion');
            $table->unsignedBigInteger('idCuentaU');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idCuentaU')->references('id')->on('cuentasusuarios');
            $table->foreign('idProducto');
            
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
        Schema::dropIfExists('carritos');
    }
};

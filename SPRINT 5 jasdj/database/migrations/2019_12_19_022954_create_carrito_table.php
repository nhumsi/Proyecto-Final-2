<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table -> bigInteger ('producto_id');
              $table -> decimal ('cantidad',9,2);
              $table -> decimal ('precio', 9,2);
              $table->primary(['id', 'producto_id']);
              $table->foreign('carrito_id')->references('id')->on('carrito');
             // KEY FK_DetalleVenta_Producto(CodigoProducto),

             CONSTRAINT FK_DetalleVenta_Producto FOREIGN KEY (Producto_id) REFERENCES producto (Producto_id),
             CONSTRAINT FK_DetalleVenta_Venta FOREIGN KEY (carrito_id) REFERENCES venta (carrito_id)
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
        Schema::dropIfExists('carrito');
    }
}

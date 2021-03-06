<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('producto');
            $table->decimal('precio');
            $table->string('observaciones');
            $table->string('categoria');
            $table->string('almacen');
            // $table->unsignedBigInteger('id_categoria')->unsigned();
            // $table->foreign("id_categoria")->references("id")->on("categoria")
            // ->onDelete("cascade")
            // ->onUpdate("cascade");
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
        Schema::dropIfExists('productos');
    }
}

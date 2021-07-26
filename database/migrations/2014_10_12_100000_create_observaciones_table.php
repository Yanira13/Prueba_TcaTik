<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observaciones', function (Blueprint $table) {
            $table->id();
            $table->string('observaciones');
            $table->unsignedBigInteger('productos_id')->unsigned();
            $table->foreign("productos_id")->references("id")->on("productos")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
        Schema::dropIfExists('observaciones');
    }
}

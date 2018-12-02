<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinions', function (Blueprint $table) {
            $table->unsignedInteger('id_empleado');
            $table->unsignedInteger('id_empleador');
            $table->text('decripcion');
            $table->unsignedDecimal('calificacion');
            $table->date('fecha');

            $table->foreign('id_empleado')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_empleador')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinions');
    }
}

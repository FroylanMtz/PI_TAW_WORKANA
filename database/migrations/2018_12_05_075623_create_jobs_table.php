<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo');
            $table->text('descripcion');
            $table->text('minidescripcion');
            $table->date('fecha');
            $table->text('estado');
            $table->date('entrega');
            $table->text('categoria');
            $table->text('subcategoria');
            $table->text('habilidades');
            $table->text('tipo');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('user_trabajador')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}

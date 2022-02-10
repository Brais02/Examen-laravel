<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('extracto')->nullable();
            $table->text('contenido');
            $table->boolean('caducable')->default('false')->nullable(); //Checkbox
            $table->boolean('comentable')->default('false')->nullable(); //Checkbox
            $table->enum('acceso', ['privado', 'publico']); //Select
            $table->date('fecha');
            
            //$table->integer('usuario');
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
        Schema::dropIfExists('posts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
  	Schema::create('libros', function (Blueprint $table) {
  		$table->engine = "InnoDB";
    	$table->bigIncrements('id');
    	$table->bigInteger('categoria_id')->unsigned();
    	$table->string('nombre');
    	$table->timestamps();
    	$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
  	});
  }

  public function down(): void
  {
  	//
  }
};

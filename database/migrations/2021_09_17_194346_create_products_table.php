<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
            $table->integer('priority');
            
            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->string('urldemo');
            $table->string('image1')->nullable();
            
            $table->string('image2')->nullable();
            
            $table->string('image3')->nullable();
            
            $table->string('image4')->nullable();
            $table->string('title')->nullable();    
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
        Schema::dropIfExists('products');
    }
}

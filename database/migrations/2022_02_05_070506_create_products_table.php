<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            
            $table->id(); //id, title(string), description(longText), price(float), nustatyti kodu $table->float('price', 8, 2), category_id(unsignedBigInteger), image_url(string) 
            //bei ryšį foreign su ProductCategory per savo category_id į id.

            $table->string('title');
            $table->longText('description');
            $table->float('price', 8, 2);
            $table->unsignedBigInteger('category_id');
            $table->string('image_url');
            $table->foreign('category_id')->references('id')->on('product_categories');

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

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
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('image_link')->nullable(true);
            $table->string('link_default')->nullable(true);
            $table->string('link_access_deep')->nullable(true);
            $table->string('link_access_product')->nullable(true);
            $table->integer('price_default')->nullable(true);
            $table->integer('price_sale')->nullable(true);
            $table->integer('percent_sale')->nullable(true);
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySpendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_spends', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable(true);
            $table->string('title');
            $table->double('price_default')->default(0)->nullable(true);
            $table->string('avatar')->nullable(true);
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
        Schema::dropIfExists('category_spends');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable(true);
            $table->integer('author_id')->unsigned()->nullable(true);
            $table->string('name')->nullable(true);
            $table->double('price')->default(0)->nullable(true);
            $table->date('read_start_date')->nullable(true);
            $table->date('read_end_date')->nullable(true);
            $table->tinyInteger('status')->length(1)->unsigned()->nullable(true)->comment('1: readed, 0: unread');
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
        Schema::dropIfExists('books');
    }
}

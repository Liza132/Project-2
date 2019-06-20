<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('photo');
            $table->date('date');
            $table->text('description');
            $table->timestamps();
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('genre_id');
            $table->foreign('author_id')->references('id')
              ->on('authors')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')
              ->on('genres')->onDelete('cascade');

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

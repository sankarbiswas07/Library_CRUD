<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('book_id');

            $table->integer('admin_id');

            $table->string('book_name');

            $table->string('author_name');

            $table->integer('no_of_pieces');  //no of pieces available of the book

            $table->string('edition');

            $table->string('pub_name');

            $table->integer('pub_year');

            $table->string('genre');

            $table->string('catagory');

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
        Schema::dropIfExists('stocks');
    }
}

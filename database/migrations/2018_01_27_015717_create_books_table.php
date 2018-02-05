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
            $table->string('title', 191);
            $table->string('description', 191);
            $table->string('pdf', 191);
            $table->integer('user_id')->unsigned();
            $table->integer('book_category_id')->unsigned();
            $table->timestamps();

            if(Schema::hastable('books')){
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('book_category_id')->references('id')->on('books');
            }

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_book_category_id_foreign');
        });
        Schema::dropIfExists('books');
    }
}

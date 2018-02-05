<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration
{
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });


        Schema::create('interest_user', function (Blueprint $table) {
            $table->integer('interest_id');
            $table->integer('user_id');
            $table->primary(['interest_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('interest_id');
    }
}

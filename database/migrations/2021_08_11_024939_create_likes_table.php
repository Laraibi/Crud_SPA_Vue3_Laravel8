<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
              $table->increments('id');;
            // $table->foreignId('user_id')->constrained('users','id');
            // $table->foreignId('post_id')->constrained('posts','id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('likes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}

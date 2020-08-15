<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentsPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_post')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->text('comment');
            $table->tinyInteger('edited')->unsigned()->default(0);
            $table->bigInteger('likes')->unsigned()->default(0);
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_post')->references('id')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

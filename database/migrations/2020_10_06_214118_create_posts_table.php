<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('postBody');
            $table->string('topic');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->unsignedBigInteger('totalUniqueViews');
            $table->unsignedBigInteger('walesUniqueViews');
            $table->unsignedBigInteger('englandUniqueViews');
            $table->unsignedBigInteger('scotlandUniqueViews');
            $table->unsignedBigInteger('maleUniqueViews');
            $table->unsignedBigInteger('femaleUniqueViews');
            $table->unsignedBigInteger('otherUniqueViews');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->
            on('users')->
            onDelete('cascade')->
            onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

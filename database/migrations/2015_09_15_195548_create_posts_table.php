<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subtype_id')->nullable();
            $table->integer('type_id')->nullable();

            $table->boolean('concept')->default(false);
            $table->integer('views')->default(0);

            $table->dateTime('startdate')->nullable();
            $table->dateTime('endingdate')->nullable();
            $table->double('price', 15, 8)->nullable();
            $table->integer('seats')->nullable();
            $table->integer('seats_remaining')->nullable();
            $table->longText('inclusions_nl')->nullable();
            $table->longText('inclusions_en')->nullable();

            $table->string('location')->nullable();

            $table->longText('body_nl');
            $table->longText('body_en')->nullable();

            $table->longText('embed');
            $table->longText('videourl');

            $table->double('score', 1, 1)->nullable();
            $table->text('matchscore')->nullable();

            $table->mediumText('pros_nl')->nullable();
            $table->mediumText('cons_nl')->nullable();
            $table->mediumText('pros_en')->nullable();
            $table->mediumText('cons_en')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('posts');
    }
}

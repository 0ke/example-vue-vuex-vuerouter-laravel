<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSharelinksTable extends Migration
{
    public function up()
    {
        Schema::create('sharelinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('user_id')->unique()->nullable();
            $table->integer('icon_id');
        });
    }

    public function down()
    {
        Schema::drop('sharelinks');
    }
}

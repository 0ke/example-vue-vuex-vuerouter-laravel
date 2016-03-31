<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypesTable extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('icon_id')->nullable();
            $table->boolean('visible');
            $table->integer('position')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('types');
    }
}

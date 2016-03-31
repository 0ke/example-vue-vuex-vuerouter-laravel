<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubtypesTable extends Migration
{
    public function up()
    {
        Schema::create('subtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('type_id');
            $table->integer('icon_id')->nullable();
            $table->integer('position')->nullable();
            $table->boolean('visible');
        });
    }

    public function down()
    {
        Schema::drop('subtypes');
    }
}

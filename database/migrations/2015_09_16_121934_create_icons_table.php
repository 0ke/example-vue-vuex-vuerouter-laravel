<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIconsTable extends Migration
{
    public function up()
    {
        Schema::create('icons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classname');
            $table->string('iconname');
            $table->string('type');
            $table->string('website')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('icons');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShareablesTable extends Migration
{
    public function up()
    {
        Schema::create('shareables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sharelink_id');
            $table->morphs('shareable');
        });
    }

    public function down()
    {
        Schema::drop('shareables');
    }
}

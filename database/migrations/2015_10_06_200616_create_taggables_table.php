<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaggablesTable extends Migration
{
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->morphs('taggable');
        });
    }

    public function down()
    {
        Schema::drop('taggables');
    }
}

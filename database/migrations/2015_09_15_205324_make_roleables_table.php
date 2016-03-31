<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MakeRoleablesTable extends Migration
{
    public function up()
    {
        Schema::create('roleables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->morphs('roleable');
        });
    }

    public function down()
    {
        Schema::drop('roleables');
    }
}

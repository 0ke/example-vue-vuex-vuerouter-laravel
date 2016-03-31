<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('concept')->default(false);
            $table->string('label')->nullable();

            $table->mediumText('requirements')->nullable();
            $table->mediumText('expectations')->nullable();
            $table->mediumText('profile')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('remaining')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('roles');
    }
}

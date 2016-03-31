<?php

use Illuminate\Database\Migrations\Migration;

class AddAboutToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->longText('about_nl');
            $table->longText('about_en');
            $table->mediumText('pattern');
        });
    }

    public function down()
    {
        //Schema::drop('users');
    }
}

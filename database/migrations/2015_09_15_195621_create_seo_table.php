<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeoTable extends Migration
{
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('title_nl')->nullable();
            $table->string('title_en')->nullable();

            $table->string('slug')->nullable();
            $table->string('slug_nl')->nullable();
            $table->string('slug_en')->nullable();

            $table->longText('description_nl')->nullable();
            $table->longText('description_en')->nullable();
            $table->integer('icon_id')->nullable();
            $table->morphs('seoble');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('seo');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });

        Schema::create('albums', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('year');
            $table->string('img', 255);
            $table->unsignedInteger('artist_id');
            $table->foreign('artist_id')
                ->references('id')->on('artists');
        });

        Schema::create('songs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('track');
            $table->string('src', 255);
            $table->integer('duration');
            $table->unsignedInteger('artist_id');
            $table->unsignedInteger('album_id');
            $table->foreign('artist_id')
                ->references('id')->on('artists');
            $table->foreign('album_id')
                ->references('id')->on('albums');
        });
    }
}

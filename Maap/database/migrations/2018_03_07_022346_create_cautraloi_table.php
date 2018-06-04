<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCautraloiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cautraloi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->longText('diachi');
            $table->string('phone');
            $table->string('traloi1')->nullable();
            $table->string('traloi2')->nullable();
            $table->string('traloi3')->nullable();
            $table->string('traloi4')->nullable();
            $table->string('traloi5')->nullable();
            $table->string('traloi6')->nullable();
            $table->string('traloi7')->nullable();
            $table->boolean('seen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cautraloi');
    }
}

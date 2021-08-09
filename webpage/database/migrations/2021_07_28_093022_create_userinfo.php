<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('discordID');
            $table->string('living');
            $table->boolean('online');
            $table->integer('rating');
            $table->integer('number_of_battle');
            $table->integer('number_of_win');
            $table->integer('number_of_lose');
            $table->integer('number_of_tie');
            $table->decimal('win_rate', 4, 1);
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
        Schema::dropIfExists('userinfo');
    }
}

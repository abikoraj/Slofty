<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->text('background')->nullable();

            $table->text('title1')->nullable();
            $table->text('icon1')->nullable();
            $table->text('count1')->nullable();

            $table->text('title2')->nullable();
            $table->text('icon2')->nullable();
            $table->text('count2')->nullable();

            $table->text('title3')->nullable();
            $table->text('icon3')->nullable();
            $table->text('count3')->nullable();

            $table->text('title4')->nullable();
            $table->text('icon4')->nullable();
            $table->text('count4')->nullable();
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
        Schema::dropIfExists('counters');
    }
}

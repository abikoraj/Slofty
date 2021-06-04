<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->text('subHeading')->nullable();
            $table->text('description')->nullable();
            $table->text('sideImage')->nullable();
            $table->text('skill1')->nullable();
            $table->text('progress1')->nullable();
            $table->text('skill2')->nullable();
            $table->text('progress2')->nullable();
            $table->text('skill3')->nullable();
            $table->text('progress3')->nullable();
            $table->text('skill4')->nullable();
            $table->text('progress4')->nullable();
            $table->text('skill5')->nullable();
            $table->text('progress5')->nullable();
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
        Schema::dropIfExists('skills');
    }
}

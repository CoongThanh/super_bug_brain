<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('fullcontent',500);
            $table->string('answerA',200);
            $table->string('answerB',200);
            $table->string('answerC',200);
            $table->string('answerD',200);
            $table->integer('answer');
            $table->integer('fieldquestions_id');
            $table->integer('status');
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
        Schema::dropIfExists('questions');
    }
};

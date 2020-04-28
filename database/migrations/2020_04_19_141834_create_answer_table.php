<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigInteger('question_id')->unsigned();
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade');
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->integer('correct_ans');
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
        $table->dropForeign('questions_question_id_foreign');
        Schema::dropIfExists('answers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('question', 255);
            $table->string('answer_a', 255);
            $table->string('answer_b', 255);
            $table->string('answer_c', 255);
            $table->string('answer_d', 255);
            $table->enum('correct_answer', ['A', 'B', 'C', 'D']);
            $table->text('explanation')
                ->nullable();
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
        Schema::dropIfExists('quizzes');
    }
}

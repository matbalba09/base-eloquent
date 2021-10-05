<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->string('correct_answer')->nullable();
            $table->string('exam_type_id')->nullable();
            $table->string('blank')->nullable();
            $table->string('choice_1')->nullable();
            $table->string('choice_2')->nullable();
            $table->string('choice_3')->nullable();
            $table->string('choice_4')->nullable();
            $table->string('essay_pts')->nullable();
            $table->string('assessment_id')->nullable();
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
        Schema::dropIfExists('assessment_questions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseScheduleTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_schedule_teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_schedule_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('course_schedule_id')->references('id')->on('course_schedules');
            $table->foreign('teacher_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('course_schedule_teachers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_course_id')->nullable();
            $table->unsignedBigInteger('course_schedule_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('student_course_id')->references('id')->on('student_courses');
            $table->foreign('course_schedule_id')->references('id')->on('course_schedules');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('status')->nullable();
            $table->string('reason')->nullable();
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
        Schema::dropIfExists('student_schedules');
    }
}

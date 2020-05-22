<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered', function (Blueprint $table) {
            $table->foreignId('st_id')->references('user_id')->on('students');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->integer('section_id');
            $table->string('semester');
            $table->integer('year');
            $table->string('letter_grade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered');
    }
}

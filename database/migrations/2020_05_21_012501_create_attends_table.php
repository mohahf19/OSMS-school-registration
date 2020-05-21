<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attends', function (Blueprint $table) {
            $table->integer('st_id');
            $table->integer('course_id');
            $table->integer('section_id');
            $table->string('semester');
            $table->integer('year');
            $table->date('date');
            $table->integer('hours');
            $table->integer('tot_hours');
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
        Schema::dropIfExists('attends');
    }
}

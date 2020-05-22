<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            //$table->bigInteger('user_id');
            $table->float('grade_points');
            $table->integer('total_credits');

            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        $trigger = "
        CREATE TRIGGER registered_student_delete
        BEFORE DELETE
            ON students FOR EACH ROW
        BEGIN
            DELETE FROM registered
            WHERE registered.st_id = OLD.user_id;
        END;
        ";

        DB::unprepared($trigger);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

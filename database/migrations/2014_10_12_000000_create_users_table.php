<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();

            $table->text('address');
            $table->string('phone');
            $table->date('birthday');

            $table->string('password');

            $table->rememberToken();
            $table->timestamps();
        });

        DB::update("ALTER TABLE users AUTO_INCREMENT = 22001000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->bigIncrements('id')->unsigned();

        //     $table->string('name');
        //     $table->string('surname');
        //     $table->string('email')->unique()->index();

        //     $table->text('address');
        //     $table->string('phone');
        //     $table->date('birthday');

        //     $table->string('password');

        //     $table->integer('login_type')->default(1);

        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        // DB::update("ALTER TABLE users AUTO_INCREMENT = 22001000;");
        $sql = "CREATE TABLE `users` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
            `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `birthday` date NOT NULL,
            `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
            `login_type` int(11) NOT NULL DEFAULT 1,
            `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `users_email_unique` (`email`)
          ) ENGINE=InnoDB AUTO_INCREMENT=22001006 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
          
        DB::statement($sql);

        $trigger1 = "
        CREATE TRIGGER user_student_delete
        BEFORE DELETE
            ON users FOR EACH ROW
        BEGIN
            DELETE FROM students
            WHERE students.user_id = OLD.id;
        END;
        ";

        DB::unprepared($trigger1);

        $trigger2 = "
        CREATE TRIGGER user_ta_delete
        BEFORE DELETE
            ON users FOR EACH ROW
        BEGIN
            DELETE FROM tas
            WHERE tas.user_id = OLD.id;
        END;
        ";

        DB::unprepared($trigger2);


    
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

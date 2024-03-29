<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->increments('id');
            //people data
            $table->string('cpf', 11)->unique()->nullable();
            $table->string('name', 50);
            $table->string('phone', 11);
            $table->date('birth')->nullable();
            $table->string('gender', 1)->nullable();
            $table->text('notes')->nullable();

            //auth data
            $table->string('email', 80)->unique();
            $table->string('password', 254)->nullable();

            //permission
            $table->string('status')->default('active');
            $table->string('permission')->default('app.user');

            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();


        });
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

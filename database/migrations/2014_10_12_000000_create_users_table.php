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
            $table->id();
            $table->string('firstname');
            $table->string('secondname')->nullable();
            $table->string('lastaname');
            $table->string('username')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('file_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->bigInteger('created_by')->unsigned()->index();
            $table->bigInteger('updated_by')->unsigned()->index();
            $table->enum('state', ['A', 'I'])->nullable()->default('A');
            $table->timestamps();
            $table->foreign('file_id')->references('id')->on('files');


          
            // Schema::table('posts', function (Blueprint $table) {
            //     $table->unsignedBigInteger('user_id');
             
            //     $table->foreign('user_id')->references('id')->on('users');
            // });
           
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

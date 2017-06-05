<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('full_name',100); 
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->string('preferred_name',100)->nullable();
            $table->integer('user_role_id')->unsigned();
            $table->foreign('user_role_id')->references('id')->on('user_roles');
            $table->integer('salutation')->nullable();
            $table->integer('gender')->nullable();
            $table->string('address',200)->nullable();
            $table->integer('profile_img_id')->nullable()->unsigned();
            $table->foreign('profile_img_id')->references('id')->on('images');
            $table->integer('cover_img_id')->nullable()->unsigned();
            $table->foreign('cover_img_id')->references('id')->on('images');
            $table->integer('added_by')->nullable()->unsigned(); 
            $table->foreign('added_by')->references('id')->on('users');
            $table->integer('active')->default(0);
            $table->string('status_reason',100)->nullable();
            $table->rememberToken();
            $table->timestamps();
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uploaded_name',100);
            $table->string('name',100);
            $table->string('ext');
            $table->integer('width');
            $table->integer('height');
            $table->integer('size');
            $table->integer('added_user')->nullable()->unsigned();
            /*$table->foreign('added_user')->references('id')->on('users');*/
            $table->integer('active'); 
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
        Schema::drop('images');
    }
}

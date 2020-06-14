<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_account_id')->nullable();
            $table->dateTime('paid_data')->nullable();
            $table->dateTime('expiry_date')->nullable();
            $table->string('plan')->nullable(); // monthly Or quarterly Or  yearly !! 
            $table->double('paid_amount')->nullable();
            $table->tinyInteger('status')->default(0); // 0 ->off or 1 -> on
            $table->softDeletes();
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
        Schema::dropIfExists('course_user');
    }
}

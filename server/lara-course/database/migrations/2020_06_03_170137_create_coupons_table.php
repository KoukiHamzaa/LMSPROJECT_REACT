<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('course_id');
            $table->integer('student_id');
            $table->integer('category_id')->nullable();
            $table->integer('user_account_id')->nullable();
            $table->string('type')->default('free'); // whitch mean free descount and the type of this discount
            $table->double('price', 8, 2);
            $table->string('status')->default('on'); //on, off
            $table->dateTime('deadline');
            $table->float('count_timer');
            $table->integer('total_available');
            $table->integer('total_remaining')->nullable();
            
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
        Schema::dropIfExists('coupons');
    }
}

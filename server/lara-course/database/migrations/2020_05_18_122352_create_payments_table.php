<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('course_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->double('amount', 10, 2);
            $table->string('status')->default('started_payment'); // this one will return me from payment site !! 
            $table->string('mode_of_payment')->nullable(); // three choises : card, cash, online transfer ....
            $table->string('payment_processor')->nullable(); // paypal,  paysack, stripe <== (it's looks like a brdig , can make us to pay in the international ! :D)
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
        Schema::dropIfExists('payments');
    }
}

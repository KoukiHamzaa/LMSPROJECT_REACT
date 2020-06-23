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
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            // $table->string('phone')->nullable();
            $table->string('image')->default('http://placehold.jp/230x180.png');
            $table->string('paystack_authorization_code')->nullable();
            $table->string('paystack_customer_code')->nullable();
            $table->string('gender')->nullable()->default('Male');
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('isSubscribed')->nullable()->default(0);
            $table->string('email')->unique();
            $table->string('password')->default('$2y$10$ixeLX.r7c6UnYkGOBoIFu.TXIBDtk4GrLQGi0ypdcq2ttMVlI0/uy');
            $table->integer('view_count')->default(0); // counting views :D   
            $table->integer('role_id')->default(1);
            
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

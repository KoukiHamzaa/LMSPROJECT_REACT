<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');

            //create course section
            $table->string('category_name');
            $table->string('title');
            $table->string('sub_title');
            $table->longText('description');
            $table->longText('about_instructor')->nullable();
            $table->string('playlist_url');
            $table->string('photo')->nullable();
            $table->string('promo_video_url')->nullable();
            $table->string('tags')->nullable(); // it can be php, laravel, any thing like that 
            $table->integer('creator_status')->default(0); //live: 1 , ,not live:0
            $table->integer('admin_status')->default(0); //live: 1 , ,not live:0
            //target student !! 
            $table->longText('what_will_student_learn')->nullable();
            $table->longText('target_student')->nullable(); 
            $table->longText('requirements')->nullable(); 

            //price and coupons
            $table->double('discount_price', 10, 2);
            $table->double('actual_price', 10, 2);

            //stats
            $table->integer('view_count')->default(0);
            $table->integer('subscriber_count')->default(0);
           
            
            $table->softDeletes(); // that is if one delete his information/data this actually still in our data but he can't see them again!
            $table->timestamps(); // this one it automatically creates two new field created at && updated at  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

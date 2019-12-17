<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('creator');
            $table->string('title');
            //$table->string('email')->nullable(); 
            $table->string('content');
            $table->integer('votes');
            $table->string('topic');
            $table->timestamp('post_created_at')->nullable(); //Use this for further details about a blogpost

            /**
             * @todo Include attribute time created
             */ 
             $table->bigInteger('user_id')->unsigned();

             $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')->onUpdate('cascade');
                    
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
        Schema::dropIfExists('blog_posts');
    }
}

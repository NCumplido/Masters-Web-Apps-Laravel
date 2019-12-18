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
        Schema::create('blog_posts', function (Blueprint $table) 
        {
            $table->bigIncrements('id');

            $table->string('creator');
            $table->string('title');
            $table->string('topic');
            $table->string('content');
            $table->integer('votes');
            $table->timestamp('post_created_at')->nullable(); 
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned();

            //Is this needed to set up list of comments?
            //$table->bigInteger('comment_id')->unsigned->nullable();

            $table->foreign('user_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
                    
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

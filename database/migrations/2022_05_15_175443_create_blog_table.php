<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('content')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category')->nullable();
            $table->timestamps();


            $table->foreign('author_id')->references('id')->on('author');
            $table->foreign('category')->references('id')->on('blog_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
};

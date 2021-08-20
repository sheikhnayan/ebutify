<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_detail_id')->constrained()->onDelete('cascade');
            $table->string('image_link_1')->nullable();
            $table->string('image_link_2')->nullable();
            $table->string('image_link_3')->nullable();
            $table->string('image_link_4')->nullable();
            $table->string('image_link_5')->nullable();
            $table->string('video_link')->nullable();
            $table->string('gif_1')->nullable();
            $table->string('gif_2')->nullable();
            $table->string('gif_3')->nullable();
            $table->string('gif_4')->nullable();
            $table->string('gif_5')->nullable();
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
        Schema::dropIfExists('product_images');
    }
}

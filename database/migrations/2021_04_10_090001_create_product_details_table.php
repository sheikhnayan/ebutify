<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('cost', $precision = 8, $scale = 2)->nullable();
            $table->decimal('profit', $precision = 8, $scale = 2)->nullable();
            $table->bigInteger('total_order')->nullable();
            $table->decimal('total_revenue', $precision = 8, $scale = 2)->nullable();
            $table->bigInteger('alexa_rank')->nullable();
            $table->string('age')->nullable();
            $table->foreignId('product_type_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('tag')->nullable();
            $table->string('category')->nullable();
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->string('opportunity_level')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('explore_pro_type')->nullable();
            $table->string('explore_star_rating')->nullable();
            $table->bigInteger('explore_t_review')->nullable();
            $table->bigInteger('ads_spend')->nullable();
            $table->bigInteger('monthly_traffic')->nullable();
            $table->bigInteger('running_ads')->nullable();
            $table->string('fb_page_link')->nullable();
            $table->string('uploader_name')->nullable();
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
        Schema::dropIfExists('product_details');
    }
}

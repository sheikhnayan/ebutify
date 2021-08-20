<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_detail_id')->constrained()->onDelete('cascade');
            $table->string('aliexpress')->nullable();
            $table->string('amazon')->nullable();
            $table->string('ebay')->nullable();
            $table->string('youtube')->nullable();
            $table->string('shopify')->nullable();
            $table->string('google_trend')->nullable();
            $table->string('facebook_ad')->nullable();
            $table->string('competitor_link_1')->nullable();
            $table->string('competitor_link_2')->nullable();
            $table->string('competitor_link_3')->nullable();
            $table->string('competitor_link_4')->nullable();
            $table->string('competitor_link_5')->nullable();
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
        Schema::dropIfExists('product_links');
    }
}

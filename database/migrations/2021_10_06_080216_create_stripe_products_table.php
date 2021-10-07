<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripe_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_code')->nullable();
            $table->decimal('monthly_pricing')->nullable();
            $table->decimal('to_pay_today')->nullable();
            $table->decimal('original_amount')->nullable();
            $table->decimal('discount_amount')->nullable();
            $table->decimal('saved_percentage')->nullable();
            $table->decimal('billed_for')->nullable();
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
        Schema::dropIfExists('stripe_products');
    }
}

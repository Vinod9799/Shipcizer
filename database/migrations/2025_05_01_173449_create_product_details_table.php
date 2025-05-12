<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('product_sku');
            $table->string('product_hsn');
            $table->string('product_name');
            $table->string('product_unitprice');
            $table->string('product_qty');
            $table->string('total_amount');
            $table->string('item_id');
            $table->string('gst');
            $table->string('product_discount');
            $table->string('igst');
            $table->string('sgst');
            $table->string('cgst');
            $table->string('igst_value');
            $table->string('cgst_value');
            $table->string('sgst_value');
            $table->string('color');
            $table->string('brand');
            $table->string('category');
            $table->string('serial_number');
            $table->string('item_size');
            $table->string('images');
            $table->string('product_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};

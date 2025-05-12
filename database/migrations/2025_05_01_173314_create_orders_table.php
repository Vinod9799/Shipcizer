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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('customer_order_number');
            $table->string('order_type');
            $table->string('shipment_type');
            $table->string('channel');
            $table->string('channel_id');
            $table->string('ship_date');
            $table->string('cod_remmited');
            $table->string('fulfillment_id');
            $table->string('seller_channel_id');
            $table->string('seller_channel_name');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

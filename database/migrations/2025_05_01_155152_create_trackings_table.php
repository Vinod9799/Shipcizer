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
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
       //     $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('awb_number');
            $table->string('status_code');
            $table->string('status');
            $table->string('status_description');
            $table->string('mapped_status');
            $table->string('remarks');
            $table->string('location');
            $table->string('journey_type');
            $table->string('alternate_awb_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};

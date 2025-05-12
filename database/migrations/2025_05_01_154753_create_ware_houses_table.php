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
        Schema::create('ware_houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('warehouse_name');
            $table->string('contact_person');
            $table->string('contact_phone', 15);
            $table->string('support_email')->nullable();
            $table->string('support_contact', 15)->nullable();
            $table->text('address');
            $table->string('gst_no', 20)->nullable();
            $table->string('pincode', 6);
            $table->string('city');
            $table->string('state');
            $table->string('hub_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ware_houses');
    }
};

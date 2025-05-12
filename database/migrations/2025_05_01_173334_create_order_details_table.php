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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('ware_houses')->onDelete('cascade');
            $table->string('b_customer_name');
            $table->string('b_customer_email');
            $table->string('b_address_line1');
            $table->string('b_address_line2');
            $table->string('b_city');
            $table->string('b_state');
            $table->string('b_country');
            $table->string('b_pincode');
            $table->string('b_contact');
            $table->string('b_email');
            $table->string('s_customer_name');
            $table->string('s_customer_email');
            $table->string('s_address_line1');
            $table->string('s_address_line2');
            $table->string('s_city');
            $table->string('s_state');
            $table->string('s_country');
            $table->string('s_pincode');
            $table->string('s_contact');
            $table->string('s_email');
            $table->string('weight');
            $table->string('length');
            $table->string('breadth');
            $table->string('height');
            $table->string('vol_weight');
            $table->string('shipping_charges');
            $table->string('cod_charges');
            $table->string('rto_charges');
            $table->string('gst_charges');
            $table->string('discount');
            $table->string('invoice_amount');
            $table->string('zone');
            $table->string('cgst');
            $table->string('sgst');
            $table->string('igst');
            $table->string('courier_partner');
            $table->string('awb_number');
            $table->string('manifest_status');
            $table->string('rto_status');
            $table->string('pickup_time');
            $table->string('pickup_done');
            $table->string('pickup_schedule');
            $table->string('weight_disputed');
            $table->string('invoice_status');
            $table->string('expected_delivery_date');
            $table->string('delivered_date');
            $table->string('route_code');
            $table->string('ewaybill_number');
            $table->string('fulfilled_at');
            $table->string('otp');
            $table->string('shipment_error');
            $table->string('fulfillment_error');
            $table->string('fulfillment_retries');
            $table->string('rto_date');
            $table->string('cod_marked_paid');
            $table->string('cod_cycle_generated');
            $table->string('shopify_tags');
            $table->string('is_partially_paid');
            $table->string('ndr_status_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};

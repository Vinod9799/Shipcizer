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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('channel_name');
            $table->string('channel');
            $table->string('api_key');
            $table->string('password');
            $table->string('store_url');
            $table->string('shared_secret');
            $table->string('woo_consumer_key');
            $table->string('woo_consumer_secret');
            $table->string('magento_access_token');
            $table->string('store_hippo_access_key');
            $table->string('kart_rocket_api_key');
            $table->string('auto_fulfill');
            $table->string('auto_cancel');
            $table->string('auto_cod_paid');
            $table->string('last_sync');
            $table->string('last_id');
            $table->string('amazon_mws_token');
            $table->string('company_id');
            $table->string('company_token');
            $table->string('amazon_token');
            $table->string('company_carrier_id');
            $table->string('last_executed');
            $table->string('amazon_refresh_token');
            $table->string('amazon_report_id');
            $table->string('fetch_woocommerce_order_number');
            $table->string('scince_abandon_id');
            $table->string('send_abandon_sms');
            $table->string('fetch_shopify_address_from_notes');
            $table->string('shopify_webhook_enabled');
            $table->string('create_order_webhook_enabled');
            $table->string('status_map');
            $table->string('wix_access_token');
            $table->string('wix_refresh_token');
            $table->string('wix_instance_id');
            $table->string('shopify_fulfillment_status');
            $table->string('magento_cod_mode');
            $table->string('fetch_shopify_order_from_tags');
            $table->string('shopify_order_tags');
            $table->string('fetch_status');
            $table->string('access_token');
            $table->string('instamojo_access_token');
            $table->string('instamojo_refresh_token');
            $table->string('instamojo_shop_id');
            $table->string('zoho_commerce_acconts_server');
            $table->string('zoho_commerce_api_domain');
            $table->string('zoho_commerce_location');
            $table->string('zoho_commerce_access_token');
            $table->string('zoho_commerce_refresh_token');
            $table->string('ecwid_access_token');
            $table->string('ecwid_store_id');
            $table->string('dukan_token');
            $table->string('dukan_uid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};

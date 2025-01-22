<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('is_blocked')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        // Tables for restaurant/cafe
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('qr_code');
            $table->boolean('is_booked')->default(false);
            $table->timestamps();
        });

        // User sessions
        Schema::create('user_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('table_id')->constrained('tables')->onDelete('cascade');
            $table->string('session_id');
            $table->string('ip_address');
            $table->string('client_name');
            $table->boolean('is_order')->default(false);
            $table->timestamps();
        });

        // Orders table
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->json('order');
            $table->timestamps();
        });

        // Settings table
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->json('value');
            $table->timestamps();
        });

        // Media table
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->json('value');
            $table->timestamps();
        });

        // Menu table
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('description');
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade');
            $table->foreignId('image_id')->constrained('media')->onDelete('cascade');
            $table->timestamps();
        });

        // Items table
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('description');
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
            $table->foreignId('image_id')->constrained('media')->onDelete('cascade');
            $table->double('discount')->default(0);
            $table->double('price');
            $table->timestamps();
        });

        // Invoice table
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('table_id')->constrained('tables')->onDelete('cascade');
            $table->foreignId('orders_id')->constrained('orders')->onDelete('cascade');
            $table->double('discount')->default(0);
            $table->double('total');
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
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('items');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('media');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('user_sessions');
        Schema::dropIfExists('tables');
        Schema::dropIfExists('users');
        
    }
};

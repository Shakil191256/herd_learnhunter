<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->comment('shop table');
            $table->id();
            $table->string('shop_name')->nullable()->comment('shop name');
            $table->integer('shop_number')->unique();
            $table->string('shop_address');
            $table->string('shop_phone_number')->nullable();
            $table->string('shop_email')->Unique();
            $table->string('shop_owner_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};

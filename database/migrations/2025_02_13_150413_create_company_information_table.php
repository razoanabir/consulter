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
        Schema::create('company_information', function (Blueprint $table) {
            $table->id();
            $table->text('company_name');
            $table->text('founder_name');
            $table->text('founder_phone_number');
            $table->text('slug');
            $table->text('founder_email')->nullable();
            $table->text('company_address');
            $table->text('registration_date');
            $table->text('company_license_number');
            $table->text('trade_license_number');
            $table->text('trade_license_registration_date');
            $table->text('trade_license_expiration_date');
            $table->text('tin_number')->nullable();
            $table->text('bin_number')->nullable();
            $table->text('service_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_information');
    }
};

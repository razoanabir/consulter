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
        Schema::create('potential_clients', function (Blueprint $table) {
            $table->id();
            $table->text('client_name');
            $table->text('phone_number');
            $table->text('email')->nullable();
            $table->text('company_name')->nullable();
            $table->text('follow_up_date')->nullable();
            $table->text('note')->nullable();
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potential_clients');
    }
};

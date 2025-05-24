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
        Schema::create('company_shareholders', function (Blueprint $table) {
            $table->id();
            $table->text('company_id');
            $table->text('share_holder_name')->nullable();
            $table->text('share_holder_position')->nullable();
            $table->text('share_holder_phone_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_shareholders');
    }
};

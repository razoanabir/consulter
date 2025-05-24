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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->text('facebook_link');
            $table->text('instagram_link');
            $table->text('twitter_link');
            $table->text('linked_in_link');
            $table->text('contact_number');
            $table->text('email');
            $table->text('address');
            $table->text('weekly_holiday');
            $table->text('working_time');
            $table->text('google_map_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};

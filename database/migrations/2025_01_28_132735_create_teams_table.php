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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('designation');
            $table->text('image');
            $table->text('work_description');
            $table->text('slug');
            $table->text('facebook_link');
            $table->text('instagram_link');
            $table->text('twitter_link');
            $table->text('linked_in_link');
            $table->text('email');
            $table->text('contact_number');
            $table->text('job_experience');
            $table->text('educational_experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

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
        Schema::create('cover_photos', function (Blueprint $table) {
            $table->id();
            $table->text('landing_page');
            $table->text('service_page');
            $table->text('about_page');
            $table->text('pricing_page');
            $table->text('team_page');
            $table->text('project_page');
            $table->text('blog_page');
            $table->text('contact_page');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cover_photos');
    }
};

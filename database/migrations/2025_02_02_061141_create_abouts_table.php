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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('details');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('skill_1');
            $table->text('skill_2');
            $table->text('skill_3');
            $table->text('expertice_at_skill_1');
            $table->text('expertice_at_skill_2');
            $table->text('expertice_at_skill_3');
            $table->text('video_link');
            $table->text('video_thumbnail');
            $table->text('successful_project');
            $table->text('expert_consulter');
            $table->text('cup_of_coffee');
            $table->text('client_satisfection');
            $table->text('success_project');
            $table->text('our_experience');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

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
        Schema::create('course_lessons', function (Blueprint $table) {
            $table->id();

            $table->foreignId('course_module_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('title');

            // Video options (either one can be used)
            $table->string('video_url')->nullable();     // YouTube, Vimeo, Bunny, etc
            $table->string('video_file')->nullable();    // Uploaded mp4 stored in storage

            // PDF lesson
            $table->string('pdf')->nullable();

            // Meta
            $table->integer('duration')->nullable();     // in minutes
            $table->boolean('is_preview')->default(false); // Free lesson
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_lessons');
    }
};

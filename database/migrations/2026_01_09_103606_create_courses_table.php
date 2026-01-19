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

    Schema::create('courses', function (Blueprint $table) {

    $table->id();

    $table->string('title');

    $table->string('slug')->unique();

    $table->text('short_description');

    $table->longText('description');

    $table->string('thumbnail')->nullable();

    $table->string('promo_video')->nullable();

    $table->string('level');
    $table->string('language')->default('English');
    $table->integer('duration')->nullable();

    $table->decimal('price', 10, 2)->default(0);
    $table->decimal('sale_price', 10, 2)->nullable();
    $table->boolean('is_free')->default(false);

    $table->timestamp('published_at')->nullable();

    $table->boolean('is_active')->default(true);

    $table->string('meta_title')->nullable();

    $table->string('meta_description')->nullable();

    $table->timestamps();

    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

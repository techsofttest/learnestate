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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->string('image')->nullable();


            $table->string('meta_title')->nullable();

            $table->string('meta_description')->nullable();

            $table->text('header_scripts')->nullable();

            $table->text('footer_scripts')->nullable();



            $table->date('published_date');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('short_description');
            $table->string('location');
            $table->decimal('budget', 15, 2)->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status'); // planning, in_progress, completed
            $table->string('cover_image');
            $table->json('gallery_images')->nullable();
            $table->boolean('featured')->default(false);
            $table->integer('sort_order')->default(0);
            // Campos SEO agregados
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};

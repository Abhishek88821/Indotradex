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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('image');
            $table->string('short_description')->nullable();
            $table->string('description')->nullable();
            $table->string('features')->nullable();
            $table->string('trandingCategories_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('parameters')->nullable();
            $table->string('resouces_about')->nullable();
            $table->string('resouces_images')->nullable();
            $table->string('download_pdf')->nullable();
            $table->integer('order')->nullable();
            $table->integer('status')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

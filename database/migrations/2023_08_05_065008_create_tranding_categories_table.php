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
        Schema::create('tranding_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->longText('short_desc')->nullable();
            $table->longText('description')->nullable();
            $table->integer('image')->nullable();
            $table->integer('banner')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(true);
            $table->string('order')->nullable();
            $table->string('created_by');
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
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
        Schema::dropIfExists('tranding_categories');
    }
};

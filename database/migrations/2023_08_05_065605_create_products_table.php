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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('icon');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->longText('shot_desc')->nullable();
            $table->longText('description')->nullable();
            $table->longText('specifications')->nullable();
            $table->longText('features')->nullable();
            $table->longText('parameters')->nullable();
            $table->longText('resouces')->nullable();
            $table->longText('resouces_images')->nullable();
            $table->longText('resouces_pdf')->nullable();
            $table->integer('status')->default(1);
            $table->string('created_by');  
            $table->integer('display_order');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();       
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tranding_products');
    }
};

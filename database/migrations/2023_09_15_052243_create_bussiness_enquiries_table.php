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
        Schema::create('bussiness_enquiries', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('type_of_support');
            $table->string('bussiness')->nullable();
            $table->longText('remarks')->nullable();
            $table->integer('status')->default(1);
            $table->uuid('admin_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness_enquiries');
    }
};

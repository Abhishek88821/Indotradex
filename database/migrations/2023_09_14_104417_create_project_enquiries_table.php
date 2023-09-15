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
        Schema::create('project_enquiries', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->uuid('user_id');
            $table->integer('type');
            $table->string('interest')->nullable();
            $table->string('requirement')->nullable();
            $table->string('p_business')->nullable();
            $table->integer('photo')->nullable();
            $table->integer('status')->default(1)->comment(" 1 => pending , 2 => aprove , 3 => canceled");
            $table->string('remark')->nullable();
            $table->uuid('admin_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_enquiries');
    }
};

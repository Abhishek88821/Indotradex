<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('firstName');
            $table->string('LastName');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('password')->nullable();
            $table->string('website')->nullable();
            $table->longText('address');
            $table->string('city');
            $table->string('pinCode');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('photoId');
            $table->integer('photo');
            $table->longText('remark')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('status')->default(1);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

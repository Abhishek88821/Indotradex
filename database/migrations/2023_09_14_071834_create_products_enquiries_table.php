<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products_enquiries', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->integer('product_id');
            $table->string('type')->comment(' 1=> Supplier  , 2 =>Buying  , 3 =>Sourcing');
            $table->string('qty')->nullable();
            $table->string('quantity')->nullable();;
            $table->string('rate')->nullable();;
            $table->string('Payment')->nullable();;
            $table->string('delivery')->nullable();;
            $table->string('quality_pdf')->nullable();;
            $table->string('photograph')->nullable();;
            $table->string('otherItems')->nullable();;
            $table->string('forMaking')->nullable();;
            $table->string('Pieces')->nullable();;
            $table->string('remark')->nullable();;
            $table->integer('status')->default(1);
            $table->uuid('admin_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_enquiries');
    }
};

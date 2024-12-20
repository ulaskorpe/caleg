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
        Schema::create('site_locations', function (Blueprint $table) {
            $table->id();
            $table->enum('location',['top','middle','bottom'])->default('top');
            $table->integer('order')->default(0);
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

           // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_locations');
    }
};

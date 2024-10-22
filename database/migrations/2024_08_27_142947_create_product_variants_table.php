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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('title');
            $table->longText('description');
            $table->string('thumbnail');
            $table->string('photo');
            $table->string('category_id');
            $table->longText('type_id');
            $table->string('price')->default('00.00');
            $table->tinyInteger('status');
            $table->bigInteger('views')->default(0);
            $table->tinyInteger('language_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};

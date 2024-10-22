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
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->string('brief',225);
            $table->string('banner');
            $table->longText('sizes');
            $table->unsignedTinyInteger('status')->default(1);
            $table->longText('meta_tag')->nullable();
            $table->string('meta_description')->nullable();
            $table->unsignedTinyInteger('show_on_head_list')->default(0);
            $table->unsignedTinyInteger('language_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

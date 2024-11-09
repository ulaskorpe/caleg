<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // protected $fillable = ['name','code','buying','selling','forex_buying','forex_selling','date'];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->float('buying')->default(0);
            $table->float('selling')->default(0);
            $table->float('forex_buying')->default(0);
            $table->float('forex_selling')->default(0);
            $table->date('date');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};

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
        Schema::create('bolgs', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->text('title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolgs');
    }
};

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
         Schema::create('departments', function (Blueprint $table) {
        $table->id();
        $table->string('title');
     $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
        $table->text('description')->nullable();
        $table->string('image1')->nullable();
        $table->string('image2')->nullable();
        $table->string('image3')->nullable();
        $table->text('paragraph1')->nullable();
        $table->text('paragraph2')->nullable();
        $table->text('paragraph3')->nullable();
        $table->text('paragraph4')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};

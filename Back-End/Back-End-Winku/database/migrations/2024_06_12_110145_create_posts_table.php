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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('imageUrl')->nullable();
            $table->integer('likeCount')->default(0);
            $table->integer('dislikeCount')->default(0);
            $table->integer('viewCount')->default(1200);
            $table->integer('commentCount')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

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
        Schema::create('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('postId');
            $table->id('userId')->constrained()->onDelete('cascade');
            $table->string('text')->default(fake()->text(20));
            $table->json('repliedCommentIds')->nullable();
            $table->boolean('isMainComment')->default(true);
            $table->boolean('isChildComment')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

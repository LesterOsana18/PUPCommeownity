<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('paws', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('update_id')->constrained('updates')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['user_id', 'update_id']); // Prevent duplicate paws
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paws');
    }
};


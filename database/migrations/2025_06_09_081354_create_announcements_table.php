<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('image_path')->nullable();  // image_path is now nullable
            $table->text('excerpt');     // short blurb
            $table->text('content');     // full content
            $table->boolean('is_active')->default(true); // status flag
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};

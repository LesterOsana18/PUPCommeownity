<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('carousel_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('image_path');
            $table->text('excerpt');     // short blurb
            $table->text('content');     // full content
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carousel_items');
    }
};

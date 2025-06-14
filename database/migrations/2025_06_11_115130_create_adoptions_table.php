<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->enum('sex', ['male', 'female']);
            $table->integer('age');
            $table->enum('color', ['Black', 'White', 'Brown', 'Orange', 'Gray', 'Other']);
            $table->decimal('weight', 5, 2);
            $table->boolean('sterilized')->nullable();;
            $table->text('location');
            $table->text('photo_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
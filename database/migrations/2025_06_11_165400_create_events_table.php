<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('CURRENT');
            $table->string('name');
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('location');
            $table->text('description');
            $table->string('image_path')->nullable();
            $table->integer('target_volunteers');
            $table->integer('current_volunteers')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
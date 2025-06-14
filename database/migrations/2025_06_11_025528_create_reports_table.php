<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('location');
            $table->date('seen_at');
            $table->string('media')->nullable();
            $table->text('observation');
            $table->enum('recurring', ['yes', 'no']);
            $table->string('reporter_name')->nullable();
            $table->string('reporter_email')->nullable();
            $table->enum('reporter_affiliation', ['student', 'faculty', 'staff', 'visitor']);
            $table->boolean('privacy')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};

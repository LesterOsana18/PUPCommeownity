<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('team_committees', function (Blueprint $table) {
            $table->id();
            $table->string('office'); // e.g., Office of the President
            $table->string('email');
            $table->string('person_in_charge')->nullable(); // e.g., Yelen Nepomuceno
            $table->string('role')->nullable(); // e.g., Event proposals, etc.
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_committees');
    }
};

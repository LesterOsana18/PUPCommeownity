<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adoption_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->date('birth_date');
            $table->string('occupation')->nullable();
            $table->string('company_business_name');
            $table->string('social_media_profile')->nullable();
            $table->enum('civil_status', ['single', 'married', 'other']);
            $table->enum('sex', ['male', 'female', 'other']);
            $table->text('adoption_reason')->nullable();
            $table->enum('adopted_before', ['yes', 'no']);
            $table->string('alt_first_name');
            $table->string('alt_last_name');
            $table->string('relationship_to_alt');
            $table->string('phone_alt');
            $table->string('email_alt');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoption_applications');
    }
};
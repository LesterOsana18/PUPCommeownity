<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('adoption_applications', function (Blueprint $table) {
            $table->dropColumn([
                'alt_first_name',
                'alt_last_name',
                'relationship_to_alt',
                'phone_alt',
                'email_alt'
            ]);
        });
    }

    public function down()
    {
        Schema::table('adoption_applications', function (Blueprint $table) {
            $table->string('alt_first_name')->nullable();
            $table->string('alt_last_name')->nullable();
            $table->string('relationship_to_alt')->nullable();
            $table->string('phone_alt')->nullable();
            $table->string('email_alt')->nullable();
        });
    }
};

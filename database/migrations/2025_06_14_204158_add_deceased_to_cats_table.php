<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('cats', function (Blueprint $table) {
            $table->boolean('deceased')->default(false)->after('adopted');
            $table->date('date_of_death')->nullable()->after('deceased');
        });
    }

    public function down()
    {
        Schema::table('cats', function (Blueprint $table) {
            $table->dropColumn('deceased');
            // $table->dropColumn('date_of_death');
        });
    }
};

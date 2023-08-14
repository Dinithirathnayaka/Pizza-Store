<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Schema::table('products', function (Blueprint $table) {
        //     // Add the 'imgurl' column to the 'products' table
        //     $table->string('imgurl')->nullable();
        // });
    }

    public function down()
    {
        // Schema::table('products', function (Blueprint $table) {
        //     // Remove the 'imgurl' column from the 'products' table (if needed)
        //     $table->dropColumn('imgurl');
        // });
    }
};

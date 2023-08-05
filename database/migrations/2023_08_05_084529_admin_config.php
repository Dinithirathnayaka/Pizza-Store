<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up(): void
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin@1234'),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }


    public function down(): void
    {

        DB::table('users')->where('email', 'admin@gmail.com')->delete();
    }
};

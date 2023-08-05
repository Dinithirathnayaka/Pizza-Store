<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('categories')->insert([
            ['name' => 'Pizza', 'description' => 'Description for Category 1'],
            ['name' => 'Burger', 'description' => 'Description for Category 2'],

        ]);
    }
}

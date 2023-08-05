<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    public function run(): void
    {

        $pizzaData = [
            [
                'name' => 'Margherita Pizza',
                'description' => 'Classic pizza with tomato sauce, mozzarella, and fresh basil',
                'price' => 10.99,
                'discount' => 2.00,
                'imgurl' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
                'category_id' => 1, // Category ID for pizza
            ],
            [
                'name' => 'Hawaiian Pizza',
                'description' => 'Pizza with tomato sauce, mozzarella, ham, and pineapple',
                'price' => 12.50,
                'discount' => 1.50,
                'imgurl' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
                'category_id' => 1, // Category ID for pizza
            ],
            [
                'name' => 'Pepperoni & Mushroom Pizza',
                'description' => 'Pizza with tomato sauce, mozzarella, pepperoni, and mushrooms',
                'price' => 11.50,
                'discount' => 1.00,
                'imgurl' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
                'category_id' => 1, // Category ID for pizza
            ],
            [
                'name' => 'Vegetarian Pizza',
                'description' => 'Pizza with tomato sauce, mozzarella, bell peppers, onions, olives, and mushrooms',
                'price' => 10.99,
                'discount' => 2.00,
                'imgurl' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
                'category_id' => 1, // Category ID for pizza
            ],
            [
                'name' => 'Meat Lover\'s Pizza',
                'description' => 'Pizza with tomato sauce, mozzarella, pepperoni, sausage, bacon, and ham',
                'price' => 13.99,
                'discount' => 2.50,
                'imgurl' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80',
                'category_id' => 1, // Category ID for pizza
            ],
        ];

        $burgerData = [
            [
                'name' => 'Cheeseburger',
                'description' => 'Juicy burger with cheese, lettuce, tomatoes, and pickles',
                'price' => 8.99,
                'discount' => 1.00,
                'imgurl' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YnVyZ2VyfGVufDB8fDB8fHww&w=1000&q=80',
                'category_id' => 2, // Category ID for burger
            ],
            [
                'name' => 'Bacon Cheeseburger',
                'description' => 'Cheeseburger with crispy bacon, lettuce, tomatoes, and pickles',
                'price' => 10.50,
                'discount' => 0.50,
                'imgurl' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YnVyZ2VyfGVufDB8fDB8fHww&w=1000&q=80',
                'category_id' => 2, // Category ID for burger
            ],
            [
                'name' => 'Mushroom Swiss Burger',
                'description' => 'Burger with sautéed mushrooms, Swiss cheese, lettuce, and onions',
                'price' => 9.50,
                'discount' => 1.00,
                'imgurl' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YnVyZ2VyfGVufDB8fDB8fHww&w=1000&q=80',
                'category_id' => 2, // Category ID for burger
            ],
            [
                'name' => 'BBQ Bacon Burger',
                'description' => 'Burger with BBQ sauce, bacon, cheddar cheese, and onions',
                'price' => 11.99,
                'discount' => 1.50,
                'imgurl' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YnVyZ2VyfGVufDB8fDB8fHww&w=1000&q=80',
                'category_id' => 2, // Category ID for burger
            ],
            [
                'name' => 'Avocado Turkey Burger',
                'description' => 'Turkey burger with avocado, lettuce, tomato, and mayo',
                'price' => 10.99,
                'discount' => 2.00,
                'imgurl' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YnVyZ2VyfGVufDB8fDB8fHww&w=1000&q=80',
                'category_id' => 2, // Category ID for burger
            ],
        ];


        // Seed pizza products
         foreach ($pizzaData as $pizza) {
            DB::table('products')->insert($pizza);
        }

        // Seed burger products
        foreach ($burgerData as $burger) {
            DB::table('products')->insert($burger);
        }
    }
}

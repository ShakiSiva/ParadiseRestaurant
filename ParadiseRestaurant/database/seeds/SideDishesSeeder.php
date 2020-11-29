<?php

use Illuminate\Database\Seeder;

class SideDishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('side_dishes')->insert([

            [
                'id' => '1',
                'side_dish_name' => 'Wadai',
                'price' =>'45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'side_dish_name' => 'Dhal curry',
                'price' =>'75',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'side_dish_name' => 'Fish curry',
                'price' =>'120',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '4',
                'side_dish_name' => 'Wadai + Dhal curry',
                'price' =>'120',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '5',
                'side_dish_name' => 'Wadai + Fish curry',
                'price' =>'165',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '6',
                'side_dish_name' => 'Fish curry + Dhal curry',
                'price' =>'195',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '7',
                'side_dish_name' => 'Wadai + Dhal curry +Fish curry',
                'price' =>'240',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}

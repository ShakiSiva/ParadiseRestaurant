<?php

use Illuminate\Database\Seeder;

class MainDishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_dishes')->insert([

            [
                'id' => '1',
                'main_dish_name' => 'Rice',
                'price' =>'100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'main_dish_name' => 'Rotty',
                'price' =>'20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'main_dish_name' => 'Noodles',
                'price' =>'150',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}

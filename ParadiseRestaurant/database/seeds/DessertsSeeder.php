<?php

use Illuminate\Database\Seeder;

class DessertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desserts')->insert([
            [
                'id' => '1',
                'dessert_name' => '-------',
                'price' =>'0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id' => '2',
                'dessert_name' => 'Wattalappam',
                'price' =>'40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'dessert_name' => 'Jelly',
                'price' =>'20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '4',
                'dessert_name' => 'Pudding',
                'price' =>'25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}

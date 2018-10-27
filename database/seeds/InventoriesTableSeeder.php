<?php

use Illuminate\Database\Seeder;
use App\inventory;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'quantity_cellar' => 10,
                'quantity_sold' =>  0,
                'product_id' =>  1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'quantity_cellar' => 10,
                'quantity_sold' =>  0,
                'product_id' => 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'quantity_cellar' => 10,
                'quantity_sold' => 0,
                'product_id' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ];

        inventory::insert($data);
    }
}

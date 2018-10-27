<?php

use Illuminate\Database\Seeder;
use App\products_by_marks;


class ProductsMarksTableSeeder extends Seeder
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
                'mark_id' => 1,
                'product_id'=>1,
                'value'=>1000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'mark_id' => 2,
                'product_id'=>1,
                'value'=>1000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'mark_id' => 1,
                'product_id'=>2,
                'value'=>1000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'mark_id' => 2,
                'product_id'=>2,
                'value'=>2000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'mark_id' => 3,
                'product_id'=>2,
                'value'=>3000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'mark_id' => 1,
                'product_id'=>3,
                'value'=>4000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
            ,
            [
                'mark_id' => 3,
                'product_id'=>3,
                'value'=>5000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ];

        products_by_marks::insert($data);
    }
}

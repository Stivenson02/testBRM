<?php

use Illuminate\Database\Seeder;
use App\embargo;

class EmbargoTableSeeder extends Seeder
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
                'quantity_total'=> 10,
                'date_embargo'=> date('Y-m-d'), 
                'product_id'=> 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'quantity_total'=> 10,
                'date_embargo'=> date('Y-m-d'), 
                'product_id'=> 2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'quantity_total'=> 10,
                'date_embargo'=> date('Y-m-d'), 
                'product_id'=> 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ];

        embargo::insert($data);
    }
}

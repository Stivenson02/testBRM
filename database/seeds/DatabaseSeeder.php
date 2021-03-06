<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(ProductsTableSeeder::class);
       $this->call(MarksTableSeeder::class);
       $this->call(ProductsMarksTableSeeder::class);
       $this->call(EmbargoTableSeeder::class); 

    }
}

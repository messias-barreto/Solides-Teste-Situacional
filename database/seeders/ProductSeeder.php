<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


            DB::table('products')->insert([
                [
                'name' => Str::random(10),
                'category_id' => random_int(1,5),
                'value' => 750.00
                ], 
                [
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 1200.00
                ],
                [
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 1476.00
                ],[
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 1476.00
                ],[
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 720.00
                ],[
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 550.00
                ],[
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 453.00
                ],[
                    'name' => Str::random(10),
                    'category_id' => random_int(1,5),
                    'value' => 758.00
                ]
            ]);


    }
}

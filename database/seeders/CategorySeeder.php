<?php

namespace Database\Seeders;

use App\Models\Category;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Flauta'],
            ['name' => 'Clarineta'],
            ['name' => 'Trompete',],
            ['name' => 'Trombone'],
            ['name' => 'Saxofone']
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            'title'=>'цветы 1'
        ]);
        Category::insert([
            'title'=>'цветы 2'
        ]);
        Category::insert([
            'title'=>'цветы 3'
        ]);
    }
}

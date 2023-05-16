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
        Category::truncate();
        Category::updateOrCreate(['name'=> 'business']);
        Category::updateOrCreate(['name'=>'entertainment']);
        Category::updateOrCreate(['name'=>'general']);
        Category::updateOrCreate(['name'=>'health']);
        Category::updateOrCreate(['name'=>'science']);
        Category::updateOrCreate(['name'=>'sports']);
        Category::updateOrCreate(['name'=>'technology']);
    }
}

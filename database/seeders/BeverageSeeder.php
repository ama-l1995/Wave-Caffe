<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Cat;
use App\Models\Beverage;
use App\Models\Category;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beverage::factory()
        ->count(10)
        ->for(Category::factory())
        ->create();

    }
}

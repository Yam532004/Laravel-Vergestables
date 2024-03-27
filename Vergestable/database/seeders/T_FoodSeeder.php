<?php

namespace Database\Seeders;
use  App\Models\T_food;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class T_FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        T_food::factory()
        ->count(5)
        ->create();
    }
}

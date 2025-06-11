<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Table::factory(15)->create();
        \App\Models\Category::factory(6)->create();
        \App\Models\Menu::factory(30)->create();
        \App\Models\Promotion::factory(5)->create();
    }
}

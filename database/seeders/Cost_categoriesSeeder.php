<?php

namespace Database\Seeders;

use App\Models\Cost_category;
use Illuminate\Database\Seeder;

class Cost_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cost_categories = new Cost_category();
        $cost_categories->name = 'eat';
        $cost_categories->icon = 'image.jpg';

        
    }
}

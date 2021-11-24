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
        $cost_categories->name = 'Education';
        $cost_categories->icon = 'icons/education.png';
        $cost_categories->save();
        
        $cost_categories = new Cost_category();
        $cost_categories->name = 'Electric';
        $cost_categories->icon = 'icons/electric.png';
        $cost_categories->save();

        $cost_categories = new Cost_category();
        $cost_categories->name = 'Healthcare';
        $cost_categories->icon = 'icons/healthcare.png';
        $cost_categories->save();

        $cost_categories = new Cost_category();
        $cost_categories->name = 'Internet';
        $cost_categories->icon = 'icons/internet.png';
        $cost_categories->save();

        $cost_categories = new Cost_category();
        $cost_categories->name = 'Play';
        $cost_categories->icon = 'icons/play.png';
        $cost_categories->save();

        $cost_categories = new Cost_category();
        $cost_categories->name = 'Relationship';
        $cost_categories->icon = 'icons/relationship.png';
        $cost_categories->save();

        $cost_categories = new Cost_category();
        $cost_categories->name = 'Shopping';
        $cost_categories->icon = 'icons/shopping.png';
        $cost_categories->save();

    }
}

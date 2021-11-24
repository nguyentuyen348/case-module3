<?php

namespace Database\Seeders;

use App\Models\Income_category;
use Illuminate\Database\Seeder;

class Income_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $income_categories = new Income_category();
        $income_categories->name = 'Investment';
        $income_categories->icon = 'icons/money-bag.png';
        $income_categories->save();

        $income_categories = new Income_category();
        $income_categories->name = 'Bank';
        $income_categories->icon = 'icons/bank.png';
        $income_categories->save();
        
        $income_categories = new Income_category();
        $income_categories->name = 'Selling';
        $income_categories->icon = 'icons/selling.png';
        $income_categories->save();

        $income_categories = new Income_category();
        $income_categories->name = 'Salary';
        $income_categories->icon = 'icons/salary.png';
        $income_categories->save();

    }
}

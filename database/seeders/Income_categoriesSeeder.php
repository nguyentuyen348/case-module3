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
        $income_categories->name = 'salary';
        $income_categories->icon = 'image.jpg';

    }
}

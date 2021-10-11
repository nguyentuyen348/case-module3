<?php

namespace Database\Seeders;

use App\Models\Wallet_category;
use Illuminate\Database\Seeder;

class Wallet_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallet_categories = new Wallet_category();
        $wallet_categories->name = 'Education';
        $wallet_categories->icon = 'icons/education.png';
        $wallet_categories->save();
        
        $wallet_categories = new Wallet_category();
        $wallet_categories->name = 'Healthcare';
        $wallet_categories->icon = 'icons/healthcare.png';
        $wallet_categories->save();

        $wallet_categories = new Wallet_category();
        $wallet_categories->name = 'Shopping';
        $wallet_categories->icon = 'icons/shopping.png';
        $wallet_categories->save();

        $wallet_categories = new Wallet_category();
        $wallet_categories->name = 'Work';
        $wallet_categories->icon = 'icons/work.png';
        $wallet_categories->save();

        $wallet_categories = new Wallet_category();
        $wallet_categories->name = 'Play';
        $wallet_categories->icon = 'icons/play.png';
        $wallet_categories->save();

    }
}

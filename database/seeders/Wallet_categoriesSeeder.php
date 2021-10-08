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
        $wallet_categories->name = 'consumption';
        $wallet_categories->icon = 'image.jpg';
        }
}

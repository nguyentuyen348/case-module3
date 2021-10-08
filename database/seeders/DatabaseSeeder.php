<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Cost_categoriesSeeder::class);
        $this->call(CostsSeeder::class);
        $this->call(Income_categoriesSeeder::class);
        $this->call(IncomesSeeder::class);
        $this->call(Money_typesSeeder::class);
        $this->call(Wallet_categoriesSeeder::class);
        $this->call(WalletsSeeder::class);
    }
}

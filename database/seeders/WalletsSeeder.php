<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallet = new Wallet();
        $wallet->name = 'test1';
        $wallet->wallet_category_id = '1';
        $wallet->amount = '1000000';
        $wallet->note = 'demo1';
        $wallet->status = 'disable';
        $wallet->cost_id = '1';
        $wallet->income_id = '1';

    }
}

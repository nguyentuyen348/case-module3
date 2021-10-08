<?php

namespace Database\Seeders;

use App\Models\Cost;
use Illuminate\Database\Seeder;

class CostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cost = new Cost();
        $cost->name = 'eat';
        $cost->note = '';
        $cost->amount = '10000';
        $cost->save();
    }
}

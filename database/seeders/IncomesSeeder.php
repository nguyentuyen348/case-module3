<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Seeder;

class IncomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $income = new Income();
        $income->name = 'salary';
        $income->note = '';
        $income->amount = '100000';
        $income->save();
    }
}

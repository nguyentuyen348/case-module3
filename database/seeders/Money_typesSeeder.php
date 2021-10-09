<?php

namespace Database\Seeders;

use App\Models\Money_type;
use Illuminate\Database\Seeder;

class Money_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $money_type = new Money_type();
        $money_type->name = 'VND';
        $money_type->icon = 'image.jpg';
        $money_type->mark = 'VND';
        $money_type->save();
    }
}

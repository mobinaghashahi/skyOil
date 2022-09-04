<?php

namespace Database\Seeders;

use App\Models\oilBuy;
use Illuminate\Database\Seeder;

class oilBuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        oilBuy::factory()->count(10)->create();
    }
}

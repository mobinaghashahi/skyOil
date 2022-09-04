<?php

namespace Database\Seeders;

use App\Models\reward;
use Illuminate\Database\Seeder;

class rewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reward::factory()->count(10)->create();
    }
}

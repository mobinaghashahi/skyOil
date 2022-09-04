<?php


namespace Database\Factories;

use App\Models\Customer;
use App\Models\oilBuy;
use Illuminate\Database\Eloquent\Factories\Factory;

class rewardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rewardTitle'=>$this->faker->title,
            'scorePay'=>$this->faker->numberBetween(1,200),
            'datePayReward'=>$this->faker->date,
            'custumer_id'=>oilBuy::factory()->create()->custumer_id
        ];
    }
}
//Customer::factory()->create()->id

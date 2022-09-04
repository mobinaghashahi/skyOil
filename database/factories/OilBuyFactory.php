<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OilBuyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oilName'=>$this->faker->name,
            'liter'=>$this->faker->numberBetween(5,1000),
            'serviceMan'=>$this->faker->name,
            'dateChangeOil'=>$this->faker->date,
            'custumer_id'=>Customer::factory()->create()->id,
        ];
    }
}

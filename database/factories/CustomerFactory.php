<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'family' => $this->faker->lastName,
            'meliCode' => $this->faker->numerify('#########'),
            'phoneNumber' => $this->faker->numerify('0##########'),
            'carTag' => $this->faker->numerify('####'),
            'carType' => $this->faker->text(5),
            'dateChangeOil' => $this->faker->date,
            'expirationDay' => $this->faker->numberBetween(1, 2000),
            'kilometerCurrent' => $this->faker->numberBetween(1, 2000),
            'kilometerProposed' => $this->faker->numberBetween(1, 2000),
        ];
    }
}

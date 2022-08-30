<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class canAddDuplicateNullMeliCodeCustomerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();

        $name = $this->faker->name;
        $lastName = $this->faker->lastName;
        //meliCode is Null
        $phoneNumber=$this->faker->numerify('0##########');
        $carTag=$this->faker->numerify('####');
        $carType=$this->faker->text(5);
        $dateChangeOil=$this->faker->date;
        $expirationDay=$this->faker->numberBetween(1, 2000);
        $kilometerCurrent=$this->faker->numberBetween(1, 2000);
        $kilometerProposed=$this->faker->numberBetween(1, 2000);
        $oilName=$this->faker->text(10);
        $liter=$this->faker->numberBetween(1, 200);
        $serviceMan=$this->faker->name();

        $response = $this->actingAs($user)->post(route('addCustomer'),
            [
                'name' => $name,
                'family' => $lastName,
                //meliCode is Null
                'phoneNumber' => $phoneNumber,
                'carTag' => $carTag,
                'carType' => $carType,
                'dateChangeOil' => $dateChangeOil,
                'expirationDay' => $expirationDay,
                'kilometerCurrent' => $kilometerCurrent,
                'kilometerProposed' => $kilometerProposed,
                'oilName' => $oilName,
                'liter' => $liter,
                'serviceMan' => $serviceMan,
                'sendSms' => 'no'
            ]);

        $name = $this->faker->name;
        $lastName = $this->faker->lastName;
        //meliCode is Null
        $phoneNumber=$this->faker->numerify('0##########');
        $carTag=$this->faker->numerify('####');
        $carType=$this->faker->text(5);
        $dateChangeOil=$this->faker->date;
        $expirationDay=$this->faker->numberBetween(1, 2000);
        $kilometerCurrent=$this->faker->numberBetween(1, 2000);
        $kilometerProposed=$this->faker->numberBetween(1, 2000);
        $oilName=$this->faker->text(10);
        $liter=$this->faker->numberBetween(1, 200);
        $serviceMan=$this->faker->name();

        $response = $this->actingAs($user)->post(route('addCustomer'),
            [
                'name' => $name,
                'family' => $lastName,
                //meliCode is Null
                'phoneNumber' => $phoneNumber,
                'carTag' => $carTag,
                'carType' => $carType,
                'dateChangeOil' => $dateChangeOil,
                'expirationDay' => $expirationDay,
                'kilometerCurrent' => $kilometerCurrent,
                'kilometerProposed' => $kilometerProposed,
                'oilName' => $oilName,
                'liter' => $liter,
                'serviceMan' => $serviceMan,
                'sendSms' => 'no'
            ]);

        $user->delete();

        $response->assertSessionHas(['msg'=>'کاربر با موفقیت افزوده شد']);
        $response->assertStatus(302);
    }
}

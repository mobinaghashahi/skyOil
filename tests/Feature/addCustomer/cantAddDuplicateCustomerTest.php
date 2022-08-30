<?php

namespace Tests\Feature\addCustomer;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class cantAddDuplicateCustomerTest extends TestCase
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
        $meliCode = $this->faker->numerify('#########');
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
                'meliCode' => $meliCode,
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

        $response = $this->actingAs($user)->post(route('addCustomer'),
            [
                'name' => $name,
                'family' => $lastName,
                'meliCode' => $meliCode,
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
        $response->assertRedirect(route('addCustomer'));

        $this->assertDatabaseHas('customer',[
            'phoneNumber'=>$phoneNumber
        ]);

        $this->assertDatabaseHas('oilBuy',[
            'oilName'=>$oilName,
            'liter'=>$liter
        ]);
        $response->assertSessionHas(['error'=>'این مشتری قبلا افزوده شده است.']);
        $response->assertStatus(302);
    }
}

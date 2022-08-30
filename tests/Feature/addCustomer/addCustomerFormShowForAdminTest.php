<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class addCustomerFormShowForAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get(route('showAddCustomerForm'));
        $response->assertViewIs('addCustomer');
        $response->assertStatus(200);
        $user->delete();

    }
}

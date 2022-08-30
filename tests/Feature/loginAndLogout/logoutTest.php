<?php

namespace Tests\Feature\loginAndLogout;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class logoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        //لوگات مهمان
        $response = $this->get(route('logOut'));
        $response->assertRedirect(route("login"));

        //لوگات یوزر
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get(route('logOut'));
        $response->assertRedirect(route("login"));
        $user->delete();
    }
}

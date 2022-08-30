<?php

namespace Tests\Feature\loginAndLogout;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginShowTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        //یوزر مهمان

        $response = $this->get(route('login'));
        $response->assertStatus(200);
        $response->assertViewIs('login');

        //یوزر لوگین کرده
        $user = User::factory()->create();
        $response=$this->actingAs($user)->get(route('login'));
        $response->assertStatus(302);
        $response->assertRedirect(route('home'));
        $user->delete();
    }
}

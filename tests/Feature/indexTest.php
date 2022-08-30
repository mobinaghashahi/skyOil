<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class indexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        //ورود مهمان
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('index');
        $response->assertSee('ورود');

        //ورود کاربر
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('index');
        $response->assertSee('خروج');
        $user->delete();


    }
}

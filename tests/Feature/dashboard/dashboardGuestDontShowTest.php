<?php

namespace Tests\Feature\dashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class dashboardGuestDontShowTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get(route('dashboard'));
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }
}

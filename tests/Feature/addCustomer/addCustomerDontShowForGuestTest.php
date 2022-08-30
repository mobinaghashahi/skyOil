<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class addCustomerDontShowForGuestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get(route('showAddCustomerForm'));
        $response->assertRedirect(route('login'));
        $response->assertStatus(302);
    }
}

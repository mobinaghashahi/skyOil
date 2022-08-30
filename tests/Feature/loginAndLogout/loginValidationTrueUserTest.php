<?php

namespace Tests\Feature\loginAndLogout;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginValidationTrueUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        $user = User::factory()->create();
        $response=$this->post('/login',['email'=>$user->email,'password'=>'password']);
        $this->assertAuthenticatedAs($user);
        $response->assertRedirect(route('home'));
        $this->get(route('home'))->assertSee('خروج');
        $user->delete();

    }
}

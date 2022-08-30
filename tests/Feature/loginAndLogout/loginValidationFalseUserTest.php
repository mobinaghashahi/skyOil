<?php

namespace Tests\Feature\loginAndLogout;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginValidationFalseUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post(route('login'),['email'=>'s@g.m','password'=>'asdsadsad']);
        $response->assertSessionHas(['error'=>'کاربری با این مشخصات وجود ندارد.']);

        $response = $this->post(route('login'),['email'=>'s@g.m']);
        $response->assertSessionHasErrors(['password'=>'فیلد رمز عبور الزامی است.']);

        $response = $this->post(route('login'),['password'=>'asdasdas']);
        $response->assertSessionHasErrors(['email'=>'فیلد پست الکترونیکی الزامی است.']);

        $response = $this->post(route('login'));
        $response->assertSessionHasErrors([
            'email'=>'فیلد پست الکترونیکی الزامی است.',
            'password'=>'فیلد رمز عبور الزامی است.'
            ]);

    }
}

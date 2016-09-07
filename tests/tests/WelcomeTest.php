<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_welcome_guest_users()
    {
        $this->assertSame(welcome(), 'Welcome guest!');
    }

    public function test_welcome_male_user()
    {
        $user = new \App\User(['name' => 'Duilio', 'gender' => 'm']);

        auth()->login($user);

        $this->assertSame(welcome(), 'Bienvenido Duilio!');
    }

    public function test_welcome_female_user()
    {
        $user = new \App\User(['name' => 'Marta', 'gender' => 'f']);

        auth()->login($user);

        $this->assertSame(welcome(), 'Bienvenida Marta!');
    }
}

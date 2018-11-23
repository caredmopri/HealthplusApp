<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**@test */
    function it_welcome_users_whit_nickname()
    {
        $this->get('saludo/Carlos/Carmo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Carlos, tu apodo es Carmo.');
    }

    /**@test */
    function it_welcome_users_whitout_nickname()
    {
        $this->get('saludo/Carlos')
            ->assertStatus(200)
            ->assertSee('Bienvenido Carlos, no tienes apodo');
    }
}

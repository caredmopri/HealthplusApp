<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * @test
     */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/carlos/Carmo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Carlos, tu apodo es Carmo.');
    }

    /**
     * @test
     */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/carlos')
            ->assertStatus(200)
            ->assertSee('Bienvenido Carlos.');
    }
}

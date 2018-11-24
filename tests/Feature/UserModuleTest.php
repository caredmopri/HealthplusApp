<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * @test
     */
    function it_loads_the_users_list()
    {
        $this->get('/usuarios')
                ->assertStatus(200)
                ->assertSee('Listado de Usuarios')
                ->assertSee('Diana')
                ->assertSee('Daniel');
    }

    /**
     * @test
     */
    function it_shows_a_defaul_message_if_there_are_no_users()
    {
        $this->get('/usuarios?empty')
                ->assertStatus(200)
                ->assertSee('No hay Usuarios Registrados');
    }  

    /**
     * @test
     */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
                ->assertStatus(200)
                ->assertSee('Mostrar detalle del usuario: 5');
    }

    /**
     * @test
     */
    function it_loads_new_users_page()
    {
        $this->get('/usuarios/nuevo')
                ->assertStatus(200)
                ->assertSee('Crear nuevo usuario');
    }


}

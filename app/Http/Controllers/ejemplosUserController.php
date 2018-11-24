<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   /*Ejemplo con condicional de tabla vacia o sin datos */
        if (request()->has('empty')) {
            $users =[];
        } else {
            $users = ['Carlos','Diana','Daniel','Tomas','Sandra',];
        }

        /*Ejemplo de Listado de usuarios sin condicionales de verificacion de lista vacia en la base de datos
        *$users = [
        *    'Carlos',
        *    'Diana',
        *    'Daniel',
        *    'Tomas',
        *    'Sandra',
        *];
        */
        
        $title = 'Listado de Usuarios';

        return view('users', compact('title','users'));

        /* - Otros Ejemplos de Llamado de informacion desde el controlador -
        *return view('users')
        *    ->with('users', $users)
        *    ->with('title', 'Listado de Usuarios');
        *
        *return view('users')->with([
        *   'users' => $users,
        *   'title' => 'Listado de Usuarios'
        *]);
        *
        *return view(
        *   'users', 
        *   [
        *       'users' => $users,
        *       'title' => 'Listado de Usuarios'
        *   ]
        */
    }

    public function show($id)
    {
        return "Mostrar detalle del usuario: {$id}";
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }






}

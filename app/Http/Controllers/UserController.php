<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Carlos',
            'Diana',
            'Daniel',
            'Tomas',
            'Sandra',
        ];
        
        $title = 'Listado de Usuarios';

        return view('users', compact('title','users'));

        /* - Otros Ejemplos de Llamado de informacion desde el controlador -
        *return view('users')
        *    ->with('users', $users)
        *    ->with('title', 'Listado de Usuarios');
        
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

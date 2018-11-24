<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Listado de Usuarios';

        if (request()->has('empty')) {
            $users =[];
        } else {
            $users = ['Carlos','Diana','Daniel','Tomas','Sandra',];
        }
        return view('users', compact('title','users'));
    }

    public function show($id)
    {
       return "Mostrar detalle del usuario: {$id}";
    }

    public function create()
    {
        $parraph = 'Crear nuevo usuario';

        return view('new', compact('parraph'));
    }
}

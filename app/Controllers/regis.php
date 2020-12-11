<?php namespace App\Controllers;

use App\Models\bd_regis;

class regis extends BaseController
{
    public function index(){
        return view ('objectRegis');
    }

    public function objectRegis()
    {
        $request = \Config\Services::request();
        $Nombre = $request -> getPost('Nombre');
        $Apellido = $request -> getPost('Apellido');
        $Correo = $request -> getPost('Correo');
        $Telefono = $request -> getPost('Telefono');
        $Contraseña = $request -> getPost('Contraseña');
        $dato = [
            'Nombre' => $Nombre,
            'Apellido' => $Apellido,
            'Correo' => $Correo,
            'Telefono' => $Telefono,
            'Contraseña' => $Contraseña
        ];
        $modelito = new bd_regis($db);
        $modelito -> insert($dato);
        return view('objectRegis');
    }
<?php namespace App\Controllers;
use App\Models\bd_model;
use App\Models\bd_foro;
use App\Models\bd_regis;

class Hospital extends BaseController
{

	public function inicio(){
		return view('Inicio');
	}

	public function registro(){
		return view('Registro');
	}

	public function menu(){
		return view('nav').view('Menu').view('footer');
	}

	public function doctores(){
		return view('nav').view('Doctores').view('footer');
	}

	public function consulta(){
		return view('nav').view('Consulta').view('footer');
	}

	public function foro(){
		return view('nav').view('foro').view('footer');
	}

	/*admin*/
	public function MenuAdmin(){
		return view('navAdmin').view('MenuAdmin').view('footer');
	}
	public function DoctoresAdmin(){
		return view('navAdmin').view('DoctoresAdmin').view('footer');
	}

    public function object()
    {
        $request = \Config\Services::request();
        $Nombre= $request -> getPost('Nombre');
        $Apellidos = $request -> getPost('Apellidos');
        $Edad = $request -> getPost('Edad');
        $Estatura = $request -> getPost('Estatura');
        $Fecha = $request -> getPost('Fecha');
        $Hora = $request -> getPost('Hora');
        $Doctor = $request -> getPost('Doctor');
        $Correo = $request -> getPost('Correo');
        $dato = [
            'Nombre' => $Nombre,
            'Apellidos' => $Apellidos,
            'Edad' => $Edad,
            'Estatura' => $Estatura,
            'Fecha' => $Fecha,
            'Hora' => $Hora,
            'Doctor' => $Doctor,
            'Correo' => $Correo
        ];
        $modelito = new bd_model($db);
        $modelito -> insert($dato);
        return view('nav').view('object').view('footer'); 
	}
	public function ConsultaAdmin(){
        $modelito = new bd_model($db);
        $dato['usuarios'] = $modelito -> findAll();
        return view('navAdmin').view('ConsultaAdmin', $dato).view('footer');
	}
	
    public function objectForo()
    {
        $request = \Config\Services::request();
        $Pregunta = $request -> getPost('Pregunta');
       
        $dato = [
            'Pregunta' => $Pregunta,
        ];
        $modelito = new bd_foro($db);
        $modelito -> insert($dato);
        return view('nav').view('objectForo').view('footer');
	}

	public function foroAdmin(){
        $modelito = new bd_foro($db);
        $dato['usuarios'] = $modelito -> findAll();
        return view('navAdmin').view('foroAdmin', $dato).view('footer');
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
        return view('nav').view('objectRegis').view('footer');;
    }
	
    public function usuarios(){
        $modelito = new bd_regis($db);
        $dato['usuarios'] = $modelito -> findAll();
        return view('navAdmin').view('usuarios', $dato).view('footer');
    }
}

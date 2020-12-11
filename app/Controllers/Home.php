<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('cabecera');
	}

	public function mundo(){
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}

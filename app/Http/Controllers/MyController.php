<?php namespace App\Http\Controllers;

use App\Prueba;

class MyController extends Controller
{
	public function index()
	{
		$model = new Prueba();

		$saludo = $model->saludar("Lucas");

		return view('prueba.index', ['saludo' => $saludo]);
	}
}
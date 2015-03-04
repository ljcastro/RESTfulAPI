<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VehiculoController extends Controller {

	public function showAll()
	{
		return 'mostrando todos los vehiculos';
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		return 'mostrando los vehiculos del fabricante con id '.$id;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		return 'mostrando formulario para agregar vehiculo al fabricante '.$id;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idFabricante, $idVehiculo)
	{
		return 'mostrando vehiculo '.$idVehiculo.' del fabricante '.$idFabricante;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idFabricante, $idVehiculo)
	{
		return 'mostando formulario para editar el vehiculo '.$idVehiculo.' del fabricante '.$idFabricante;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idFabricante, $idVehiculo)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idFabricante, $idVehiculo)
	{
		//
	}

}

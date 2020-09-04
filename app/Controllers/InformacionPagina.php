<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\InformacionPaginaModel;

class InformacionPagina extends Controller
{
	public function index()
	{
		$model = new InformacionPaginaModel();
		$informacionpagina = $model -> where( 'estado', 1 ) -> findAll();
		return json_encode( $informacionpagina );
	}
	public function show( $id )
	{
		$model = new InformacionPaginaModel();
		$informacionpagina = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $informacionpagina ) && is_numeric( $id ) )
		{
			return json_encode( $informacionpagina );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function update( $id )
	{
		$model = new InformacionPaginaModel();
		$datos = array(
			'numerotelefono' => "11111111",
			'email' => "Hola123@gmail.com",
			'anosexperiencia' => 9,
			'ubicacion' => "asdasdasd",
			'cantidadpersonasreserva' => 3
		);
		$informacionpagina = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $informacionpagina ) && is_numeric( $id ) )
		{
			$informacionpagina = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}

}
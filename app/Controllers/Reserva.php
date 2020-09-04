<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ReservaModel;

class Reserva extends Controller
{
	public function index()
	{
		$model = new ReservaModel();
		$reserva = $model -> where( 'estado', 1 ) -> findAll();
		return json_encode( $reserva );
	}
	public function show( $id )
	{
		$model = new ReservaModel();
		$reserva = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $reserva ) && is_numeric( $id ) )
		{
			return json_encode( $reserva );
		}
		else
		{
			return json_encode( 'No existe' );
		}
	}
	public function create()
	{
		$model = new ReservaModel();
		$datos = array(
			'idusuario' => 1,
			'fechareserva' => '20201212',
			'horareserva' => '00:14:00',
			'cantidadpersona' => 5,
			'pagototal' => 123,
		);
		$reserva = $model -> insert( $datos );

	}
	public function update( $id )
	{
		$model = new ReservaModel();
		$datos = array(
			'idusuario' => 1,
			'fechareserva' => '19990101',
			'horareserva' => '00:10:00',
			'cantidadpersona' => 2,
			'pagototal' => 35,
		);
		$reserva = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $reserva ) && is_numeric( $id ) )
		{
			$reserva = $model -> update( $id, $datos );
		}
	}
	public function delete( $id )
	{
		$model = new ReservaModel();
		$datos = array(
			'estado' => 0
		);
		$reserva = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $reserva ) && is_numeric( $id ) )
		{
			$reserva = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
}
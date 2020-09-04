<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DetalleReservaModel;

class DetalleReserva extends Controller
{
	public function index()
	{
		$model = new DetalleReservaModel();
		$detallereserva = $model -> where( 'estado', 1 ) -> findAll();
		return json_encode( $detallereserva );
	}
	public function show( $id )
	{
		$model = new DetalleReservaModel();
		$detallereserva = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $detallereserva ) && is_numeric( $id ) )
		{
			return json_encode( $detallereserva );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new DetalleReservaModel();
		$datos = array(
			'idreserva' => 1,
			'idproducto' => 1,
			'cantidadproducto' => 2,
			'subtotal' => 28
		);
		$detallereserva = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new DetalleReservaModel();
		$datos = array(
			'idreserva' => 1,
			'idproducto' => 1,
			'cantidadproducto' => 1,
			'subtotal' => 14
		);
		$detallereserva = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $detallereserva ) && is_numeric( $id ) )
		{
			$detallereserva = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function delete( $id )
	{
		$model = new DetalleReservaModel();
		$datos = array(
			'estado' => 0
		);
		$detallereserva = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $detallereserva ) && is_numeric( $id ) )
		{
			$detallereserva = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
}
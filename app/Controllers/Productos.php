<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductosModel;

class Productos extends Controller
{
	public function index()
	{
		$model = new ProductosModel();
		$productos = $model -> where( 'estado', 1 ) -> findAll();
		return json_encode( $productos );
	}
	public function show( $id )
	{
		$model = new ProductosModel();
		$productos = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $productos ) && is_numeric( $id ) )
		{
			return json_encode( $productos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new ProductosModel();
		$datos = array(
			'idcategoria' => 1,
			'nombreproducto' => 'Brahma',
			'imagenproducto' => 'asdasdasda',
			'precioproducto' => 8,
			'cantidadproductodisponible' => 3,
			'destacado' => 1
		);
		$productos = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new ProductosModel();
		$datos = array(
			'idcategoria' => 1,
			'nombreproducto' => 'FourLoko',
			'imagenproducto' => 'asdasdasda',
			'precioproducto' => 14,
			'cantidadproductodisponible' => 2,
			'destacado' => 0			
		);
		$productos = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $datos ) && is_numeric( $id ) )
		{
			$productos = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function delete( $id )
	{
		$model = new ProductosModel();
		$datos = array(
			'estado' => 0			
		);
		$productos = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $datos ) && is_numeric( $id ) )
		{
			$productos = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
}
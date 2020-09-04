<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ArticulosModel;

class Articulos extends Controller
{
	public function index()
	{
		$model = new ArticulosModel();
		$art(iculos = $model -> where( 'estado', 1 ) -> findAll();
				return json_encode( $articulos );
			}
	public function show( $id )
	{
		$model = new ArticulosModel();
		$articulos = $model -> where( 'estado',1 ) -> find( $id );
		if ( !is_null( $articulos ) && is_numeric( $id ) ) )
		{
			return json_encode( $articulos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new ArticulosModel();
		$datos = array(
			'idusuario' => 1,
			'titulo' => 'Galactus',
			'descripcion' => 'Él devorar',
		);
		$articulos = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new ArticulosModel();
		$datos = array(
			'idusuario' => 1,
			'titulo' => 'Thor',
			'descripcion' => 'Rayos y centellas'
		);
		$articulos = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $articulos ) && is_numeric( $id ) )
		{
			$articulos = $model -> update( $id, $datos );
		}
		else 
		{
			return json_encode( "No existe" );
		}
	}
	public function delete( $id )
	{
		$model = new ArticulosModel();
		$datos = array(
			'estado' => 0
		);
		$articulos = $model -> where( 'estado',1 ) -> find( $id );
		if ( !is_null( $articulos ) && is_numeric( $id ) )
		{
			$articulos = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
}
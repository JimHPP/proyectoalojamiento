<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoriaModel;

class Categoria extends Controller
{
	public function index()
	{
		$model = new CategoriaModel();
		$categoria = $model -> where( 'estado', 1 ) -> findAll();
		return json_encode( $categoria );
	}
	public function show( $id )
	{
		$model = new CategoriaModel();
		$categoria = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $categoria ) && is_numeric( $id ) )
		{
			return json_encode( $categoria );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new CategoriaModel();
		$datos = array(
			'nombrecategoria' => "Desayuno"
		);
		$categoria = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new CategoriaModel();
		$datos = array(
			'nombrecategoria' => "Cena"
		);
		$categoria = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $categoria ) && is_numeric( $id ) )
		{
			$categoria = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function delete( $id )
	{
		$model = new CategoriaModel();
		$datos = array(
			'estado' => 0
		);
		$categoria = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $categoria ) && is_numeric( $id ) )
		{
			$categoria = $model -> update( $id, $datos );
		}
	}
}
<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ChefsModel;

class Chefs extends Controller
{
	public function index()
	{
		$model = new ChefsModel();
		$chefs = $model -> where( 'estado', 1 ) -> findAll();
		return json_encode( $chefs );
	}
	public function show( $id )
	{
		$model = new ChefsModel();
		$chefs = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $chefs ) && is_numeric( $id ) )
		{
			return json_encode( $chefs );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new ChefsModel();
		$datos = array(
			'nombrechef' => "Juan",
			'fotochef' => "asdasdasd"
		);
		$chefs = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new ChefsModel();
		$datos = array(
			'nombrechef' => "Joaquin",
			'fotochef' => "asdasdasd"
		);
		$chefs = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $chefs ) && is_numeric( $id ) )
		{
			$chefs = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function delete( $id )
	{
		$model = new ChefsModel();
		$datos = array(
			'estado' => 0
		);
		$chefs = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $chefs ) && is_numeric( $id ) )
		{
			$chefs = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
}
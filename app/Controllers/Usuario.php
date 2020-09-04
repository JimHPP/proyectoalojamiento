<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuario extends Controller
{
	public function index()
	{
		$model = new UsuarioModel();
		$usuario = $model -> where( 'estado',1 ) -> findAll();
		return json_encode( $usuario );
	}
	public function show( $id )
	{
		$model = new UsuarioModel();
		$usuario = $model -> where( 'estado',1 ) -> find( $id );
		if( !is_null( $usuario ) && is_numeric( $id ) )
		{
			return json_encode( $usuario );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new UsuarioModel();
		$datos = array(
			'idtipousuario' => 1,
			'imagenusuario' => 'hola',
			'nombreusuario' => 'Batman',
			'apellidousuario' => 'Quispe',
			'telefono' => '4421210'
		);
		$usuario = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new UsuarioModel();
		$datos = array(
			'idtipousuario' => 1,
			'imagenusuario' => 'adios',
			'nombreusuario' => 'Superman',
			'apellidousuario' => 'Mamani',
			'telefono' => '123123123'
		);
		$usuario = $model -> where( 'estado',1 ) -> find( $id );
		if ( !is_null( $usuario ) && is_numeric( $id ) ) 
		{
			$usuario = $model -> update( $id,$datos );
		}
		else 
		{
			return json_encode( "No existe" )
		}
	}
	public function delete( $id )
	{
		$model = new UsuarioModel();
		$datos = array(
			'estado' => 0
		);
		$usuario = $model -> where( 'estado',1 ) -> find( $id );
		if ( !is_null( $usuario ) && is_numeric( $id ) )
		{
			$usuario = $model -> update( $id,$datos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
}
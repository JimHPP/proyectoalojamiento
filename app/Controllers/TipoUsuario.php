<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\TipoUsuarioModel;

class TipoUsuario extends Controller
{
	public function index()
	{
		$model = new TipoUsuarioModel();
		$tipousuario = $model -> where ( 'estado', 1 ) -> findAll();
		return json_encode($tipousuario);
	}
	public function show( $id )
	{
		$model = new TipoUsuarioModel();
		$tipousuario = $model -> where ( 'estado', 1 ) -> find($id);
		if ( !is_null( $tipousuario ) ) 
		{
			return json_encode ( $tipousuario );
		}
		else
		{
			return json_encode("El usuario no existe");
		}
		
	}
	public function create()
	{
		$model = new TipoUsuarioModel();
		$datos = array(
			'nombretipousuario' => 'Miembro que no es admin'	
		);
		$tipousuario = $model -> insert( $datos );
	}
	public function update( $id )
	{
		$model = new TipoUsuarioModel();
		$datos = array(
			'nombretipousuario' => 'No serás admin'
		);
		$tipousuario = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $tipousuario ) && is_numeric( $id ) ) 
		{
			$tipousuario = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode("El usuario no existe");
		}
	}
	public function delete( $id )
	{
		$model = new TipoUsuarioModel();
		$datos = array(
			'estado' => 0
		);
		$tipousuario = $model -> where( 'estado', 1 ) -> find( $id );
		if ( !is_null( $tipousuario ) && is_numeric( $id ) )
		{
			$tipousuario = $model -> update( $id, $datos );
		}
		else
		{
			return json_encode( "El usuario no existe" );
		}
	}
}
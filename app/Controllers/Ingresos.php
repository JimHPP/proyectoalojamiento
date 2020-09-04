<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\IngresosModel;

class Ingresos extends Controller
{
	public function index()
	{
		$model = new IngresosModel();
		$ingresos = $model -> where ( 'estado',1 ) -> findAll();
		return json_encode( $ingresos );
	}
	public function show( $id )
	{
		$model = new IngresosModel();
		$ingresos = $model -> where ( 'estado',1 ) -> find( $id );
		if ( !is_null( $ingresos ) && is_numeric( $id ) )
		{
			return json_encode( $ingresos );
		}
		else
		{
			return json_encode( "No existe" );
		}
	}
	public function create()
	{
		$model = new IngresosModel();
		$datos = array(
			'idusuario' => 1
		); 
		$ingresos = $model -> insert( $datos );
	}
}
<?php 
namespace App\Models;
use CodeIgniter\Model;

class ArticulosModel extends Model
{
	protected $table = 'articulos';
	protected $primaryKey = 'idarticulo';
	protected $returnType = 'array';
	protected $allowedFields = [ 'idusuario', 'titulo', 'descripcion', 'fecha', 'estado' ];
}
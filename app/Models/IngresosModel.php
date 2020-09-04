<?php 
namespace App\Models;
use CodeIgniter\Model;

class IngresosModel extends Model
{
	protected $table = 'ingresos';
	protected $primaryKey = 'idingresos';
	protected $returnType = 'array';
	protected $allowedFields = [ 'idususario', 'horafecha', 'estado' ];
}
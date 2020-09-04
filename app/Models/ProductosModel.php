<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductosModel extends Models
{
	protected $tables = 'productos';
	protected $primaryKey = 'idproducto';
	protected $returnType = 'array';
	protected $allowedFields = [ 'idcategoria', 'nombreproducto', 'imagenproducto', 'precioproducto', 'cantidadproductodisponible', 'destacado', 'estado' ];
}
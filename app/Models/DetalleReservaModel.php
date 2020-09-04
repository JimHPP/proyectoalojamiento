<?php
namespace App\Models;
use CodeIgniter\Model;

class DetalleReservaModel extends Model
{
	protected $table = 'detallereserva';
	protected $primaryKey = 'iddetallereserva';
	protected $returnType = 'array';
	protected $allowedFields = [ 'idreserva', 'idproducto', 'cantidadproducto', 'subtotal', 'estado' ];
}
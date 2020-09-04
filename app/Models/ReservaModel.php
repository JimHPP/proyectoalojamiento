<?php
namespace App\Models;
use CodeIgniter\Model;

class ReservaModel extends Model
{
	protected $table = 'reserva';
	protected $primaryKey = 'idreserva';
	protected $returnType = 'array';
	protected $allowedFields = [ 'idusuario', 'fechareserva', 'horareserva', 'cantidadpersona', 'pagototal', 'estado' ];
}
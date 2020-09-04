<?php
namespace App\Models;
use CodeIgniter\Model;

class InformacionPaginaModel extends Model
{
	protected $table = 'informacionpagina';
	protected $primaryKey = 'idinformacionpagina';
	protected $returnType = 'array';
	protected $allowedFields = [ 'numerotelefono', 'email', 'anosexperiencia', 'ubicacion','cantidadpersonasreserva' ];
}
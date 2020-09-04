<?php
namespace App\Models;
use CodeIgniter\Model;

class TipoUsuarioModel extends Model
{
	protected $table = 'tipousuario';
	protected $primaryKey = 'idtipousuario';
	protected $returnType = 'array';
	protected $allowedFields = [ 'nombretipousuario', 'estado' ];
}
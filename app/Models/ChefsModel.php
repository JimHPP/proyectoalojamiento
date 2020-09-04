<?php
namespace App\Models;
use CodeIgniter\Model;

class ChefsModel extends Model
{
	protected $table = 'chefs';
	protected $primaryKey = 'idchef';
	protected $returnType = 'array';
	protected $allowedFields = [ 'nombrechef', 'fotochef', 'estado' ];
}
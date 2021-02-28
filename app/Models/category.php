<?php namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
	protected $table = "category";
	protected $DBGroup = "default" ;
	protected $allowedFields = ['categories'];
	protected $useTimestamps = true; 
}

 ?>
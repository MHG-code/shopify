<?php namespace App\Models;

use CodeIgniter\Model;

class Brands extends Model
{
	protected $table = "brands";
	protected $DBGroup = "default" ;
	protected $allowedFields = ['brand_name'];
	protected $useTimestamps = true;
}

 ?>
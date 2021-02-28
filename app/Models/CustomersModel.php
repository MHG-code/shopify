<?php namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
	protected $table = "customers";
	protected $DBGroup = "default" ;
	protected $allowedFields = [ 'name' , 'contact' , 'address'  , 'province' , 'zip'];
	protected $useTimestamps = true;
}

 ?>
<?php namespace App\Models;

use CodeIgniter\Model;

class My_Profile extends Model
{
	protected $table = "myprofile";
	protected $DBGroup = "default" ;
	protected $allowedFields = ['name','img','facebook','youtube','instagram','about'];
	protected $useTimestamps = true; 
}

 ?>
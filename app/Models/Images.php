<?php namespace App\Models;

use CodeIgniter\Model;

class Images extends Model
{
	protected $table = "images";
	protected $DBGroup = "default" ;
	protected $allowedFields = [ 'src' , 'item_id' , 'status' , 'main' ];
	protected $useTimestamps = true;

	public function get_item_images($id)
	{
		return $this

					->where('item_id',$id)
					->get()
					->getResultArray();
	}
}

 ?>
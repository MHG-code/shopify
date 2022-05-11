<?php namespace App\Models;

use CodeIgniter\Model;



class Items extends Model
{
	protected $table = "items";
	protected $DBGroup = "default" ;
	protected $allowedFields = [ 'title' , 'price' , 'discount'  , 'description' , 'category_id' , 'brand_id','main_page' , 'availability'];
	protected $useTimestamps = true;

	public function get_all_items($count)
	{
		return $this
					->select('items._id , images.src , items.title , items.price , items.discount ,  category.categories')
					->join('images','images.item_id = items._id')
					->join('category' , 'items.category_id = category._id')
					// ->join('brands' , 'items.brand_id = brands._id')
					->where('items.availability',1)
					->where('items.main_page',1)
					->where('images.main',1)
					->paginate($count);
	}

	public function get_specific_items($catg)
	{
		return $this
					->select('items._id , images.src , items.title , items.price , items.discount , category.categories')
					->join('images','images.item_id = items._id')
					->join('category' , 'items.category_id = category._id')
					// ->join('brands' , 'items.brand_id = brands._id')
					->where('items.availability',1)
					->where('images.main',1)
					->where('categories',$catg)
					->paginate();
	}


	public function get_item($id)
	{
		return $this
					->join('category' , 'items.category_id = category._id')
					// ->join('brands' , 'items.brand_id = brands._id')
					->select('items._id , items.title , items.price , items.discount, items.description')
					// ->select('brands.brand_name')
					->select('category.categories')
					->where('items._id',$id)
					->get()
					->getRowArray();
	}
}

 ?>
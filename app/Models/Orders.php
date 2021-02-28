<?php namespace App\Models;

use CodeIgniter\Model;

class Orders extends Model
{
	protected $table = "orders";
	protected $DBGroup = "default" ;
	protected $allowedFields = [ 'price' , 'discount' , 'quantity' ,'final_price'  , 'order_code' , 'item_id' , 'customer_id'];
	protected $useTimestamps = true;

	public function get_orders()
	{
		return  $this
					->join('customers', 'orders.customer_id = customers._id')
					->groupBy('customer_id')
					->select('orders._id , orders.order_code , orders.customer_id')
					->select('customers.name , customers.contact , customers.address , customers.province , customers.created_at')
					->get()
					->getResultArray();
	}

	public function order_preview($id)
	{
		return $this
					->join('items' , 'orders.item_id = items._id')
					->join('customers' , 'orders.customer_id = customers._id')

					->join('images' , 'items._id = images.item_id')
					
					->join('category' , 'items.category_id = category._id')
					->join('brands' , 'items.brand_id = brands._id')

					->select('orders.price , orders.discount , orders.final_price, orders.quantity , orders.order_code , orders.created_at')
					->select('images.src')
					->select('items.title')
					->select('brands.brand_name')
					->select('category.categories')
					->where('images.main',1)
					->where('customer_id',$id)
					->get()
					->getResultArray();
	}
}

 ?>
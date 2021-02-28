<?php namespace App\Controllers;
use App\Models\Items;
use App\Models\Category;
use App\Models\CustomersModel;
use App\Models\Orders;
use App\Models\Images;
use App\Models\My_Profile;

$pager = \Config\Services::pager();

class Customers extends BaseController
{
	protected $customer;
	protected $order;
	protected $item;
	protected $image;
	protected $category;
	protected $profile;

	public function __construct()
	{
     	$this->customer = new CustomersModel();
     	$this->order = new Orders();
     	$this->item = new Items();
     	$this->image = new Images();
     	$this->category = new Category();
     	$this->profile = new My_Profile();

		helper(['form', 'url']);
	}
	public function index()
	{
		$count =  $this->item->countAllResults();

		$base =  $this->base();

		$items = $this->item->get_all_items($count);

		$data = [
			'items' => $items ,
			'pager' =>  $this->item->pager
		];
		// dd($data);
		// exit();
		echo view('customers/index' , ['items'=>$data, 'categories'=>$base['categories'] , 'profile'=> $base['profile']]);
		// echo view('testing2' , ['items'=>$data, 'categories'=>$base['categories'] , 'profile'=> $base['profile']]);
		

	}

	// public function items(){
	// 	$items = $this->item->get_all_items();

	// 	$data = [
	// 		'items' => $items ,
	// 		'pager' =>  $this->item->pager
	// 	];

	// 	foreach ($data['items'] as $item) {
	// 		echo '<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">';
	// 			echo '<div class="product py-4">';

	// 				echo '<span class="off bg-success">-'.$item["discount"].'% OFF</span>';
	// 				echo '<a class="detail" id="detail"
	// 				data-title='.$item["title"].
	// 				'data-src='.$item["src"].
	// 				'data-price='.$item["price"].
	// 				'data-discount='.$item["discount"].
	// 				'data-id='.$item["_id"].
	// 				'data-quantity=1';

	// 				echo '<div class="text-center">';
	// 					echo '<img src="'.base_url('uploads/items/' .$item['src']). '">';
	// 				echo '</div>';
	// 				echo '</a>';

	// 				echo '<div class="about text-center">';
	// 					echo '<h5>'.$item['title'] .'</h5>';
	// 					echo '<span>'. $item['price']. ' PKR</span>';
	// 				echo '</div>';

	// 				echo '<div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">';
	// 					echo '<button class="btn btn-outline-success text-uppercase add-cart" id="add-cart"
	// 						data-title=' .$item["title"].
	// 						'data-src=' .$item["src"].
	// 						 'data-price=' .$item["price"].
	// 						 'data-discount=' .$item["discount"].
	// 						 'data-id=' .$item["_id"].
	// 						 'data-quantity="1"
	// 						 >Add to cart</button>';
	// 				echo '</div>';
	// 			echo '</div>';
	// 		echo '</div>';	
	// 	}

	// 	echo '<div class="pager">';
	// 		echo $data['pager']->links('default' , 'pager_style');
	// 	echo '</div>';

	// }

	public function spesific_items($catg){
		$base =  $this->base();

		$items = $this->item->get_specific_items($catg);

		$data = [
			'items' => $items ,
			'pager' =>  $this->item->pager
		];
		// dd($categories);
		echo view('customers/home' , ['items'=>$data, 'categories'=>$base['categories'] , 'profile'=> $base['profile']]);
	}
	
	public function add_cart()
	{
		echo view('customers/loaded_page/addCart');
	}

	public function item_detail()
	{
		$data = [];
		
		$req  = $this->request->getGet('id');
		
		$data['items'] = $this->item->get_item($req);
		$data['imgs'] = $this->image->get_item_images($req);
		
		echo view('customers/loaded_page/item_detail' , ['imgs'=> $data['imgs'], 'items'=>$data['items']] );
	}

	public function order_book()
	{
		if ($this->request->isAJAX() && $this->request->getMethod() === 'post') {
			code_generation:
			$Order_code = mt_rand(1000,9999);
			$code = $this->order->where('order_code' , $Order_code)->first();
			if ($code) {
				goto code_generation;
			}
			else{
				if (!$this->validate([
									'name' => 'required|min_length[5]',
									'contact' => 'required|min_length[11]|max_length[11]',
									'address' => 'required|min_length[20]',
									'city' => 'required|min_length[5]',
									'province' => 'required|min_length[5]'
				])) 
				{
					$this->response->setStatusCode(400);
					
					return  json_encode($this->validator->listErrors('my_validation_list'));
				}

					else{
						$a = 0;
						$req = $this->request->getVar();
						$products = json_decode($req['products'] , true);

						$customer_id = $this->customer->where('contact' , $req['contact'])->first();
						if ($customer_id) {
							$customer_id = $customer_id['_id'];
						}
						else
						{
							$data = 
							[
							'name' => $req['name'],
							'contact' => $req['contact'],
							'address' => $req['address'],
							'province' => $req['province'],
							'zip' => $req['zip'],

							];
							$customer_id = $this->customer->insert($data);
						}

					// customers add
						foreach ($products as $key) {
							$data = [
								'price' => $products[$a]['price'],
								'discount' => $products[$a]['discount'],
								'final_price' => $products[$a]['total'],
								'quantity' => $products[$a]['quantity'],
								'order_code' => $Order_code,
								'item_id' => $products[$a]['_id'],
								'customer_id' => $customer_id,
							];
							$this->order->insert($data);
						$a++;	
						}
						return "Your order placed we will contact you as soon as possible";	
					}
			}
		}
		$base =  $this->base();
		echo view('customers/order_book',['categories'=>$base['categories'] , 'profile'=> $base['profile']]);	
	}
	public function base()
	{
		$categories = $this->category->find();
		$prof = $this->profile->first();
		$data = [
			'profile' => $prof,
			'categories' => $categories
		]; 
		return $data;			
	}
}

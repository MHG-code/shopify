<?php namespace App\Controllers;
// use Config\Database;
use App\Models\Category;
use App\Models\Items;
use App\Models\Images;
use App\Models\Brands;
use App\Models\Orders;
use App\Models\My_Profile;

use CodeIgniter\I18n\Time;


class Admin extends BaseController
{
	protected $catg;
	protected $item;
	protected $image;
	protected $brand;
	protected $order;
	protected $profile;

	
	public function __construct()
	{
		$this->catg = new Category();
		$this->item = new Items();
     	$this->image = new Images();
     	$this->brand = new Brands();
     	$this->order = new Orders();
     	$this->profile = new My_Profile();

		helper(['form', 'url']);

	}
	// ...........................................................................................

	public function my_profile()
	{
		if ($this->request->getFile('logo')) {
			$logo = $this->request->getFile('logo');
			$src = $logo->getClientName();
			$logo->move('../public/uploads/logo' , $src);

		if ($this->request->getMethod() ==='post') {
			$req = $this->request->getVar();
			$data = [
				'name' => $req['Website_Name'],
				'img' => $src,
				'facebook' => $req['facebook'],
				'youtube' => $req['youtube'],
				'instagram' => $req['instagram'],
				'about' => $req['about'],
			];
		$this->profile->insert($data);
		return redirect()->to(base_url('/'));
		}
	}
		return view('admin/myProfile');
	}
	// .......................................................................................

	public function add_catg()
	{
		$req = $this->request->getVar();

		if ($req['catg'] != '')
				 {

				 	$category = strtolower($req['catg']);

					$catg_id =  $this->catg->where('categories' , $category)->first();

					if (!$catg_id) {
						$data = [
							'categories'  => $category,
							'description'  => $req['description'],
						];
						$this->catg->insert($data);
						return 1;
					}
					else{
						$this->response->setStatusCode(400);
					
						return  json_encode('Error: category alreday exist...!');
					}
				}
	}
	// .......................................................................................
	public  function add_items()
	{
		$msg = 'failed';
		$req = $this->request->getVar();

		if ($this->request->isAJAX()){

				// if category new
				if ($req["category"] != '')
				 {
				 	$category = strtolower($req['category']);
					$catg_id =  $this->catg->where('categories' , $category)->first();
					$catg_id = $catg_id['_id'];
				}
				
				//check title and and items
				$title = strtolower($req["title"]);

				$item_id = $this->item->where('category_id' , $catg_id)->where('title' , $title)->first();
				if (!$item_id) {

					$new_item  = [
								'title'  => $title,
								'price'  => $req["price"],
								'discount'  => $req["discount"],		
								'description'  => $req["description"],
								'category_id' => $catg_id,
								// 'brand_id' => 1,
								'main_page' => $req["on_main_page"],
								'availability'=> 1

				];

				$item_id =  $this->item->insert($new_item);
				// dd("here");
				// exit();

				// images upload and save after add
				// $unique = $this->unique_time();
				$main = 1;

				if ($this->request->getFileMultiple('upload_files')) {
		             foreach($this->request->getFileMultiple('upload_files') as $file)
		             {
		             	$src = $file->getClientName();
		             	$src = str_replace([' ','+','/','_','*','&','%','$','#','@','(',')','-','[',']','{','}'], '', $src); // Replaces all spaces with hyphens

		              $img_detail = [
		              	// 'src' => $file->getName(),
		                // 'src' =>  $unique.$src,
		                'src' =>  $src,

		                'item_id' => $item_id,
		                'status' => 1,
		                'main' => $main
		                // 'type'  => $file->getClientMimeType()
		              ];
		              
		              
						$this->image->insert($img_detail);
						// $file->move(WRITEPATH . 'uploads' , $img_detail['src']);
						$file->move('../public/uploads/items' ,$img_detail['src']);
						$main = 0;
		             }
		             $msg = 'Item submitted succesfully';
		             return $msg;
		        }
		        // for json response

		  //       $response = [
    //                 'success' => true,
    //                 'msg' => 'item added',
    //             ];
				// }
				// else{
				// 	$response = [
    //                 'success' => false,
    //                 'msg' => 'not added',
    //             ];
				// }

    //             return $this->response->setJSON($response);
		}
		else{
			$this->response->setStatusCode(400);
					
			return  json_encode('Error: Data already found in other way');
		}
		}
		$categories = $this->catg->find();
		$brands = $this->brand->find();
		$data = [
			'brands' => $brands,
			'categories' => $categories
		];
		// if(!$categories){
		// dd($categories);
		// exit();	
		// }
		
        echo view('admin/add_items' , $data);

	}
	// ...........................................................................................

	public function orders()
	{
		$orders = $this->order->get_orders();

		return view('admin/orders', ['orders'=>$orders]);
	}

	// ...........................................................................................

	public function order_preview()
	{
		$req  = $this->request->getGet('customer_id');

		$orders = $this->order->order_preview($req);

		return view('admin/preview_order' , ['orders'=>$orders]);
	}

	// ...........................................................................................

	public function add_user()
	{
		// $usermodel = model('App\Models\AdminModel' , false , $this->db);
		$usermodel = new AdminModel();
		$data = [
			'user_name' => "Hamza",
			'email' => "abc@example.com",
			'password' => password_hash('secret' , PASSWORD_DEFAULT),
		];
		$user = $usermodel->insert($data);
		print_r($user);
	}

	// ...........................................................................................

	public function login()
	{
		if ($this->request->getMethod() === 'post')
		{
			$req = $this->request->getPost();
			if ($this->exists($req)) {
				$this->session->set('id' , $req['id']);
				// dd($this->session->get('id'));
				// exit();
				return redirect()->to('orders');
			}
			else{
				// dd($this->session->get('id'));
				return redirect()->to('login');
			}

		}
			// dd($this->session->get('id'));

		echo view('admin/login');
	}
	// ...........................................................................................

	public function logout()
	{
		$this->session->destroy();
		return redirect()->to('login');
	}	
	// ...........................................................................................

	public function exists($req)
	{
		$hash_id = password_hash('4556' , PASSWORD_DEFAULT);
		if (password_verify($req['id'] , $hash_id)) {

			$hash_pass = password_hash('4556' , PASSWORD_DEFAULT);
			if (password_verify($req['password'] , $hash_pass))
			{
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	} 

	// ...........................................................................................

	public function get_ip_address_of_user()
	{
		echo $this->require->getServer();
   
  }
  public function unique_time()
  {
  		$myTime = new Time('now');
		$time = Time::parse($myTime);
		$sec =  $time->getSecond();
		$hour = $time->getHour();
		$day = $time->getDay(); 
		$month = $time->getMonth(); 
		$year = $time->getYear();
		$unique = $sec.$hour.$day.$month.$year;
		return $unique;
  }

	//--------------------------------------------------------------------

}

<?php namespace App\Controllers;
use App\Models\Items;
use App\Models\Category;
use App\Models\CustomersModel;
use App\Models\Orders;
use App\Models\Images;
use App\Models\My_Profile;

$pager = \Config\Services::pager();

class Testing extends \CodeIgniter\Controller
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
       return('Hamza');
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

         public function searching()
        {
            if ($this->request->isAJAX() && $this->request->getMethod() === 'post') {
                $str = json_encode($this->request->getPost('str'));
                $str = json_decode($str);
                if (strlen($str) == 0) {
                    return json_encode("");
                }
                $res = $this->item->like('title' , $str)->select('title')->get()->getResult();
                if ($res) {
                    return json_encode($res);
                }
                else{
                    return json_encode("not match");
                }
            }
                return view('arslanbhai');
        }

}
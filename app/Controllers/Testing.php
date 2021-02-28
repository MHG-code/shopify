<?php namespace App\Controllers;
use App\Models\Items;

class Testing extends \CodeIgniter\Controller
{
	protected $item;
	public function __construct()
	{
     	$this->item = new Items();
     
		helper(['form', 'url']);
	}
        public function index()
        {
            $string = "Hamza/_.";
             $string = str_replace([' ','+','/','_','*','&','%','$','#','@','(',')','-','[',']','{','}'], '', $string); // Replaces all spaces with hyphens.

            // $string =  preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
            dd($string);
            exit();
        	return view('testing');
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
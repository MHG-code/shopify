<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{

	public function before(RequestInterface $request, $arguments = null)
	{
		
		$this->session = \Config\Services::session();
		dd($this->session->get('id'));
				exit();
		if ($this->session->has('id')) {
			return;
		}
		else{
			return redirect()->to('login');
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{

	}
}


 ?>
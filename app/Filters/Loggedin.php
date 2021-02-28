<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Loggedin implements FilterInterface
{

	public function before(RequestInterface $request, $arguments = null)
	{
		$this->session = \Config\Services::session();

		if (!$this->session->has('id')) {
			return;
		}
		else{
			return redirect()->to('orders');
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{

	}
}


 ?>
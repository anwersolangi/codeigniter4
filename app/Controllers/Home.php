<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	
	public function __construct(){
		$session = \Config\Services::session($config);
		helper('form');
	}

	// public $user = new UserModel();

	public function index()
	{
		$data['title'] = 'Login';
		return view('user', $data);
	}

	public function delete($id){
		$user = new UserModel();
		if($user->delete($id)){
			echo "Success";
		} else {
			var_dump($user->errors());
		}
	}

	public function login(){
		$user = new UserModel();
		$user->where('email', $this->request->getPost('email'));
		$user->where('password', $this->request->getPost('password'));
		$query = $user->first();
		if($query){
			$obj = json_decode (json_encode ($query), FALSE);
			$newData = [
				'name' => $obj->name,
				'email' => $obj->email,
				'username' => $obj->username
			];
			// $session->set($newData);
			// $session->set($newData);
			// redirect('home/profile');
		} else {
			$session->setFlashData('errors', 'Email or Password Did not Match With Our Records');
			redirect('user');
		}
	}

	//--------------------------------------------------------------------

}
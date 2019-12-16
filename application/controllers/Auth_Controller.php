<?php 	
/**
* 
*/
class Auth_Controller extends CI_Controller
{
	public function index(){
		$this->load->view('page/auth/login');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password 
			);

		$this->m_crud->input_login($data, 'tbl_users');

		// var_dump($data);die();
	}
}
 ?>
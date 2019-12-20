<?php 	
/**
* 
*/
class Auth extends CI_Controller
{
	public function index(){
		// dd($this->bcrypt->hash_password('admin1'));
		if($this->session->is_logged_in){
			redirect('site');
		}
		$this->load->view('auth/login_bo',array('title'=>'SMKN 14 Bandung'));
	}

	function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->form_validation->run() != FALSE){
			$cek = $this->M_crud->get_data('v_user','*',array('username'=>$username));
			if($cek){
				if ($this->bcrypt->check_password($password , $cek['password'])){
					// dd($cek);
					$session=array(
						'id'=>$cek['id'],
						'nama'=>$cek['nama'],
						'username'=>$cek['username'],
						'id_level'=>$cek['id_level'],
						'level'=>$cek['level'],
						'access_level'=>$cek['access_level'],
						'grant_access'=>$cek['grant_access'],
						'is_logged_in'=>true,
					);
					$this->session->set_userdata($session);
					redirect('site');
				}else{
					$this->session->set_flashdata('error', 'Password salah.');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('error', 'Username tidak dikenali.');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('error', 'Username/Password tidak valid.');
			redirect('auth');
		}

	}

	function logout(){
		$this->session->sess_destroy();
		// null the session (just in case):
		redirect('/auth');
	}
}
 ?>
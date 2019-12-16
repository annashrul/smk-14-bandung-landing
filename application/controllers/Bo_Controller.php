<?php 
/**
* 
*/
class Bo_Controller extends CI_Controller
{
	
	function index(){
		$this->load->view('page/bo/dashboard');
	}

	function jurusan(){
		$this->load->view('page/bo/jurusan');		
	}

	function tambah_jurusan(){
		$nama_jurusan = $this->input->post('nama_jurusan');

		$data = array(
			'nama_jurusan' => $nama_jurusan
			);

		$hasil = $this->M_crud->input_jurusan($data, 'tbl_jurusan');
		redirect('Bo_Controller/jurusan');
	}

	
}
 ?>
<?php 

// tbl_berita: type 1:berita;type 2:lowongan;type 3:informasi;type 4: Jurusan;

class Site extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->output->set_header("Cache-Control: no-store, no-cache, max-age=0, post-check=0, pre-check=0");
		if(!$this->session->is_logged_in){
			redirect('auth');
		}
		$this->akses=(int)$this->session->grant_access==0?false:true;
		$this->id=$this->session->id;
		$this->layout='backoffice/layout/index';
		$this->site='SMKN 14 BANDUNG';
	}
	
	function index(){
		$data=array(
			'site'=>$this->site,
			'title'=>'HOME',
			'page'=>'dashboard/index'
		);
		$this->load->view($this->layout,$data);
	}

	function berita(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Manajemen Berita',
			'page'=>'berita/index',
			'js'=>'berita/js'
		);
		$this->load->view($this->layout,$data);
	}

	function lowongan(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Manajemen Lowongan Pekerjaan',
			'page'=>'lowongan/index',
			'js'=>'lowongan/js'
		);
		$this->load->view($this->layout,$data);
	}

	function beritaAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			if(!$this->akses) $where['id']=$this->id;
			if(isset($_GET['category'])) $where['id_category']=$_GET['category'];
			if(isset($_GET['type'])) $where['type']=$_GET['type'];
			$page= isset($_GET['page'])?$_GET['page']:1;
			$count = $this->M_crud->count_read_data('v_berita','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
			$countpage = $jml==0?1:$jml;
			
			$berita = $this->M_crud->read_data('v_berita','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('v_berita','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"id_member"=>$this->session->id,
					"id_category"=>$this->input->post('id_category'),
					"title"=>$this->input->post('title'),
					"slug"=>url_title($this->input->post('title'), 'dash', true),
					"content"=>$this->input->post('content'),
					"image"=>getImage(_uploadImage()),
					"tags"=>$this->input->post('tags'),
					"status"=>(!$this->akses?'0':'1'),
					"type"=>$this->input->post('type')
				);
				$berita = $this->M_crud->create_data('tbl_berita',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$image;
				$data = array(
					"id_member"=>$this->session->id,
					"id_category"=>$this->input->post('id_category'),
					"title"=>$this->input->post('title'),
					"slug"=>url_title($this->input->post('title'), 'dash', true),
					"content"=>$this->input->post('content'),
					"tags"=>$this->input->post('tags'),
					"status"=>(!$this->akses?'0':'1'),
					"type"=>$this->input->post('type'),
					"updated_at"=>date("Y-m-d")
				);
				if (!empty($_FILES["image"]["name"])) {
					$image = _uploadImage();
					$data['image']=getImage($image);
				}
				$berita = $this->M_crud->update_data('tbl_berita',$data,array("id"=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_berita',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"status"=>$this->input->post('status')
				);
				$berita = $this->M_crud->update_data('tbl_berita',$data,array("id"=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}

	function categoryAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			// if(!$this->akses) $where['id']=$this->id;
			$where['id !=']=4;
			$page= isset($_GET['page'])?$_GET['page']:1;
			$count = $this->M_crud->count_read_data('tbl_category','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
            $countpage = $jml==0?1:$jml;
			// ($table, $field, $where=null, $order=null, $group=null, $limit_sum=0, $limit_from=0, $having=null
			$berita = $this->M_crud->read_data('tbl_category','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('tbl_category','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"title"=>$this->input->post('title'),
				);
				$berita = $this->M_crud->create_data('tbl_category',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$data = array(
					"title"=>$this->input->post('title'),
					"updated_at"=>date("Y-m-d")
				);
				$berita = $this->M_crud->update_data('tbl_category',$data,array('id'=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_category',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"id"=>$this->input->post('id'),
					"status"=>$this->input->post('status'),
					"updated_at"=>date("Y-m-d")
				);
				$berita = $this->M_crud->update_data('tbl_category',$data,array("id"=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}

	function user(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Manajemen User',
			'page'=>'user/index',
			'js'=>'user/js'
		);
		$this->load->view($this->layout,$data);
	}

	function userAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			if(!$this->akses) $where['id']=$this->id;
			$page= isset($_GET['page'])?$_GET['page']:1;
			$count = $this->M_crud->count_read_data('v_user','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
            $countpage = $jml==0?1:$jml;
			// ($table, $field, $where=null, $order=null, $group=null, $limit_sum=0, $limit_from=0, $having=null
			$berita = $this->M_crud->read_data('v_user','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('v_user','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"nama"=>$this->input->post('nama'),
					"username"=>$this->input->post('username'),
					"password"=>$this->bcrypt->hash_password($this->input->post('password')),
					"status"=>$this->input->post('status'),
					"id_level"=>$this->input->post('level'),
				);
				$berita = $this->M_crud->create_data('tbl_user',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$data = array(
					"nama"=>$this->input->post('nama'),
					"username"=>$this->input->post('username'),
					"status"=>$this->input->post('status'),
					"id_level"=>$this->input->post('level'),
					"updated_at"=>date("Y-m-d")

				);
				if($this->input->post('password')!=''){
					$data['password']=$this->bcrypt->hash_password($this->input->post('password'));
				}
				$berita = $this->M_crud->update_data('tbl_user',$data,array('id'=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_user',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"status"=>$this->input->post('status')
				);
				$berita = $this->M_crud->update_data('tbl_user',$data,array("id"=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}

	function userlevel(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Manajemen User',
			'page'=>'user/index',
			'js'=>'user/js'
		);
		$this->load->view($this->layout,$data);
	}

	function userLevelAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			if(!$this->akses) $where['id']=$this->id;
			$page= isset($_GET['page'])?$_GET['page']:1;
			$count = $this->M_crud->count_read_data('tbl_user_level','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
            $countpage = $jml==0?1:$jml;
			// ($table, $field, $where=null, $order=null, $group=null, $limit_sum=0, $limit_from=0, $having=null
			$berita = $this->M_crud->read_data('tbl_user_level','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('tbl_user_level','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"title"=>$this->input->post('title'),
				);
				$berita = $this->M_crud->create_data('tbl_user',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$data = array(
					"title"=>$this->input->post('title')
				);
				$berita = $this->M_crud->update_data('tbl_user_level',$data,array('id'=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_user_level',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"id"=>$this->input->post('id'),
					"status"=>$this->input->post('status')
				);
				$berita = $this->M_crud->update_data('tbl_user_level',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}

	function manajemen(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Manajemen',
			'page'=>'manajemen/index',
			'js'=>'manajemen/js'
		);
		$this->load->view($this->layout,$data);
	}

	function guru(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Guru',
			'page'=>'guru/index',
			'js'=>'guru/js'
		);
		$this->load->view($this->layout,$data);
	}

	function manajemenAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			if(!$this->akses) $where['id']=$this->id;
			$page= isset($_GET['page'])?$_GET['page']:1;
			$type= isset($_GET['type'])?$_GET['type']:'all';

			if($type=='guru') $where['jabatan']=7;
			else $where['jabatan !=']=7;

			$count = $this->M_crud->count_read_data('v_manajemen','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
			$countpage = $jml==0?1:$jml;
			// ($table, $field, $where=null, $order=null, $group=null, $limit_sum=0, $limit_from=0, $having=null
			$berita = $this->M_crud->read_data('v_manajemen','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('v_manajemen','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"nama"=>$this->input->post('nama'),
					"jabatan"=>$this->input->post('jabatan'),
					"nip"=>$this->input->post('nip'),
					"image"=>getImage(_uploadImage()),
					"deskripsi"=>$this->input->post('deskripsi'),
					"matpel"=>$this->input->post('matpel'),
				);
				$berita = $this->M_crud->create_data('tbl_manajemen',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$data = array(
					"nama"=>$this->input->post('nama'),
					"jabatan"=>$this->input->post('jabatan'),
					"nip"=>$this->input->post('nip'),
					"deskripsi"=>$this->input->post('deskripsi'),
					"matpel"=>$this->input->post('matpel'),

				);
				if (!empty($_FILES["image"]["name"])) {
					$image = _uploadImage();
					$data['image']=getImage($image);
				}
				$berita = $this->M_crud->update_data('tbl_manajemen',$data,array('id'=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_manajemen',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"id"=>$this->input->post('id'),
					"status"=>$this->input->post('status')
				);
				$berita = $this->M_crud->update_data('tbl_manajemen',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}

	function jabatanAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			if(!$this->akses) $where['id']=$this->id;
			$page= isset($_GET['page'])?$_GET['page']:1;
			$count = $this->M_crud->count_read_data('tbl_jabatan','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
            $countpage = $jml==0?1:$jml;
			// ($table, $field, $where=null, $order=null, $group=null, $limit_sum=0, $limit_from=0, $having=null
			$berita = $this->M_crud->read_data('tbl_jabatan','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('tbl_jabatan','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"title"=>$this->input->post('title'),
				);
				$berita = $this->M_crud->create_data('tbl_jabatan',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$data = array(
					"title"=>$this->input->post('title')
				);
				$berita = $this->M_crud->update_data('tbl_jabatan',$data,array('id'=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_jabatan',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"id"=>$this->input->post('id'),
					"status"=>$this->input->post('status')
				);
				$berita = $this->M_crud->update_data('tbl_jabatan',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}

	function informasi(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Informasi',
			'page'=>'informasi/index',
			'js'=>'informasi/js'
		);
		$this->load->view($this->layout,$data);
	}

	function jurusan(){
		$data=array(
			'site'=>$this->site,
			'title'=>'Manajemen Jurusan',
			'page'=>'jurusan/index',
			'js'=>'jurusan/js'
		);
		$this->load->view($this->layout,$data);
	}

	function jurusanAction(){
		$action = $_GET['aksi'];
		$where = array();
		if($action=='get'){
			if(!$this->akses) $where['id']=$this->id;
			$page= isset($_GET['page'])?$_GET['page']:1;
			$count = $this->M_crud->count_read_data('tbl_jurusan','id',$where);
			$limit = 10;
            $offset = ($limit * ($page-1));
            $jml = ceil($count / $limit);
            $countpage = $jml==0?1:$jml;
			// ($table, $field, $where=null, $order=null, $group=null, $limit_sum=0, $limit_from=0, $having=null
			$berita = $this->M_crud->read_data('tbl_jurusan','*',$where,'created_at DESC', null,$limit,$offset);
			$result = array(
				"data"=>$berita,
				"count"=>$count,
				"current_page"=>(int)$page,
				"perpage"=>$limit,
				"last_page"=>$countpage
			);
			echo json_encode($result, true);
		}elseif($action=='detail'){
			$id= $_GET['id'];
			$berita = $this->M_crud->get_data('tbl_jurusan','*',array('id'=>$id));
			echo json_encode($berita, true);
		}elseif($action=='create'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"nama"=>$this->input->post('nama'),
					"username"=>$this->input->post('username'),
					"password"=>$this->bcrypt->hash_password($this->input->post('password')),
					"status"=>$this->input->post('status'),
					"id_level"=>$this->input->post('level'),
				);
				$berita = $this->M_crud->create_data('tbl_jurusan',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='update'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				
				$data = array(
					"nama"=>$this->input->post('nama'),
					"username"=>$this->input->post('username'),
					"status"=>$this->input->post('status'),
					"id_level"=>$this->input->post('level'),
					"updated_at"=>date("Y-m-d")

				);
				if($this->input->post('password')!=''){
					$data['password']=$this->bcrypt->hash_password($this->input->post('password'));
				}
				$berita = $this->M_crud->update_data('tbl_jurusan',$data,array('id'=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='delete'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$data = array(
					"id"=>$this->input->post('id')
				);
				$berita = $this->M_crud->delete_data('tbl_jurusan',$data);
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}elseif($action=='approval'){
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$data = array(
					"status"=>$this->input->post('status')
				);
				$berita = $this->M_crud->update_data('tbl_jurusan',$data,array("id"=>$this->input->post('id')));
				echo json_encode($berita, true);
			}else{
				echo 'FORBIDDEN.';
			}
		}else{
			echo 'FORBIDDEN.';
		}
	}
}
 ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_Controller extends CI_Controller{
	public function index(){
		$data['isi'] = 'page/beranda/index';
		$data['jurusan'] = $this->M_crud->read_data("tbl_jurusan","*");
		$data['config'] = $this->M_crud->get_data("tbl_config","*");
		$data['manajemen'] = $this->M_crud->get_data("tbl_manajemen","*","jabatan=1");
		$data['berita'] = $this->M_crud->read_data("tbl_berita","*","type='1'","id desc",null,3);
		$data['gallery'] = $this->M_crud->read_data("tbl_gallery","*","type='4'","id desc",null,3);
		$data['jurusan'] = $this->M_crud->read_data("tbl_jurusan","*");
		$data['berita'] = $this->M_crud->read_data("tbl_berita","*",null,"id desc",null,3);
 		$this->load->view("layout/wrapper.php",$data);
	}
	// Navbar
	function beranda(){
		$data['isi'] = 'page/beranda/index';
		$this->load->view("layout/wrapper.php",$data);
	}
	function berita($action=null){

        $count = $this->M_crud->count_data('v_berita', "id", "type='1'");
        $data['isi'] = 'page/berita/index';
        if($action == "get"){
            $pagin = $this->M_website->myPagination('v_berita','id',"type='1'",8);
            $read_data = $this->M_crud->read_data(
                "v_berita","*",
                "type='1'","id desc",null,$pagin["perPage"], $pagin['start']
            );
            $res_index = "";
            if($read_data != null){
                foreach ($read_data as $row):
                    $res_index.=$this->M_website->tempNews($row['image'],base_url("detail?type=berita&title=".$row['slug']),$row['created_at'],$row['nama'],$row['title'],$row['content']);
                endforeach;
            }else{
                $res_index .=/**@lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            $data = array(
                "pagination_link"   => $pagin['pagination_link'],
                "result_table" 	    => $res_index,
            );
            echo json_encode($data);
        }else{
            $this->load->view("layout/wrapper.php",$data);
        }
	}

	function detail_berita(){
		// $query = $this->M_crud->get_data('tbl_berita', '*', array('slug' => $berita) );
		$data['isi'] = 'page/berita/detail_berita';
		// $data['berita'] = $query;
		$this->load->view("layout/wrapper",$data);
		// dd($data);
	}
	function selayang(){
		$data['isi'] = 'page/selayang/index';
		$this->load->view("layout/wrapper.php",$data);
	}
	function manajemen(){
		$data['isi'] = 'page/manajemen/index';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function so(){
		$data['isi'] = 'page/so/index';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function kegiatan(){
		$data['isi'] = 'page/kegiatan/index';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function informasi(){
		$data['isi'] = 'page/informasi/index';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function keahlian(){
		$data['isi'] = 'page/keahlian/index';
		$this->load->view("layout/wrapper.php",$data);	
	}
	


	// Selayang Pandang

	function sejarah(){
		$data['isi'] = 'page/selayang/sejarah';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function visi_misi(){
		$data['isi'] = 'page/selayang/visi_misi';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function budaya(){
		$data['isi'] = 'page/selayang/budaya';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function landasan_hukum(){
		$data['isi'] = 'page/selayang/landasan_hukum';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function fasilitas(){
		$data['isi'] = 'page/selayang/fasilitas';
		$this->load->view("layout/wrapper.php"	,$data);	
	}


	// manajemen

	function kepala_sekolah(){
		$data['isi'] = 'page/manajemen/kepala_sekolah';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function kepala_tu(){
		$data['isi'] = 'page/manajemen/kepala_tu';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function wakil_kepala(){
		$data['isi'] = 'page/manajemen/wakil_kepala';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function dewan(){
		$data['isi'] = 'page/manajemen/dewan';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function kajur(){
		$data['isi'] = 'page/manajemen/kajur';
		$this->load->view("layout/wrapper.php"	,$data);	
	}

	// Struktur Organisasi

	function bagan_struktur(){
        $data['struktur'] = $this->M_crud->get_data("tbl_berita","*","id='2'");
        $data['isi'] = 'page/so/bagan_struktur';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function divisi(){
        $data['divisi'] = $this->M_crud->get_data("tbl_berita","*","id='3'");
		$data['isi'] = 'page/so/divisi';
		$this->load->view("layout/wrapper.php"	,$data);	
	}

	// Kegiatan

	function eskul(){
		$data['isi'] = 'page/kegiatan/eskul';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function osis(){
		$data['isi'] = 'page/kegiatan/osis';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function pramuka(){
		$data['isi'] = 'page/kegiatan/pramuka';
		$this->load->view("layout/wrapper.php"	,$data);	
	}


	// Informasi

	function akreditasi(){
		$data['isi'] = 'page/informasi/akreditasi';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function lowongan_kerja(){
		$data['isi'] = 'page/informasi/lowongan_kerja';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function sarana(){
		$data['isi'] = 'page/informasi/sarana';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function prestasi(){
		$data['isi'] = 'page/informasi/prestasi';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function tenaga_pen(){
		$data['isi'] = 'page/informasi/tenaga_pen';
		$this->load->view("layout/wrapper.php"	,$data);	
	}


// Paket keahlian

function animasi(){
		$data['isi'] = 'page/keahlian/animasi';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function design(){
		$data['isi'] = 'page/keahlian/design';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function kayu(){
		$data['isi'] = 'page/keahlian/kayu';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function keramik(){
		$data['isi'] = 'page/keahlian/keramik';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function kulit(){
		$data['isi'] = 'page/keahlian/kulit';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function logam(){
		$data['isi'] = 'page/keahlian/logam';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function multimedia(){
		$data['isi'] = 'page/keahlian/multimedia';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function otomotif(){
		$data['isi'] = 'page/keahlian/otomotif';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function tesktil(){
		$data['isi'] = 'page/keahlian/tesktil';
		$this->load->view("layout/wrapper.php",$data);	
	}

	// perpustakaan

	function perpustakaan(){
		$data['isi'] = 'page/perpustakaan/index';
		$this->load->view("layout/wrapper.php",$data);	
	}

    function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->form_validation->run() != FALSE){
            $cek = $this->M_crud->get_data('tbl_siswa','*',array('nis'=>$username));
            if($cek){
                $this->M_crud->update_data("tbl_siswa",array("isLogin"=>1),"nis='".$username."'");
                redirect('http://localhost/perpustakaan/bo/dashboard');
            }else{
                $this->session->set_flashdata('error', 'Username tidak dikenali.');
                redirect('menu_controller/login');
            }
        }else{
            $this->session->set_flashdata('error', 'Username/Password tidak valid.');
            redirect('menu_controller/login');
        }

        $this->load->view("");

    }

}
 ?>
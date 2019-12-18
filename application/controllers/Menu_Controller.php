<?php 

/**
* 
*/
class Menu_Controller extends CI_Controller
{
	public function index(){
		$data['isi'] = 'page/beranda/index';
		$data['jurusan'] = $this->db->get('tbl_jurusan')->row();
 		$hasil =$this->load->view("layout/wrapper.php",$data);


	}

	// Navbar
	function beranda(){
		$data['isi'] = 'page/beranda/index';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function berita(){
		$data['isi'] = 'page/berita/index';
		$this->load->view("layout/wrapper.php",$data);	
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
		$data['isi'] = 'page/so/bagan_struktur';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function divisi(){
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



}
 ?>
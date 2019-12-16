<?php 

/**
* 
*/
class Menu_Controller extends CI_Controller
{
	public function index(){
		$data['isi'] = 'page/beranda/index';
		$jurusan['tbl_jurusan'] = $this->db->get('tbl_jurusan')->result();
		// var_dump($jurusan);die();
 		$this->load->view("layout/wrapper.php",$data, $jurusan);
	}

	// Navbar
	function beranda(){
		$data['isi'] = 'page/beranda/index';
		$this->load->view("layout/wrapper.php",$data, $jurusan);	
	}
	function berita(){
		$data['isi'] = 'page/berita/index';
		$this->load->view("layout/wrapper.php",$data);	
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
		$data['isi'] = 'page/Kegiatan/eskul';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function osis(){
		$data['isi'] = 'page/Kegiatan/osis';
		$this->load->view("layout/wrapper.php"	,$data);	
	}
	function pramuka(){
		$data['isi'] = 'page/Kegiatan/pramuka';
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


// Paket Keahlian

function animasi(){
		$data['isi'] = 'page/Keahlian/animasi';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function design(){
		$data['isi'] = 'page/Keahlian/design';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function kayu(){
		$data['isi'] = 'page/Keahlian/kayu';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function keramik(){
		$data['isi'] = 'page/Keahlian/keramik';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function kulit(){
		$data['isi'] = 'page/Keahlian/kulit';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function logam(){
		$data['isi'] = 'page/Keahlian/logam';
		$this->load->view("layout/wrapper.php",$data);	
	}
	function multimedia(){
		$data['isi'] = 'page/Keahlian/multimedia';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function otomotif(){
		$data['isi'] = 'page/Keahlian/otomotif';
		$this->load->view("layout/wrapper.php",$data);	
	}

	function tesktil(){
		$data['isi'] = 'page/Keahlian/tesktil';
		$this->load->view("layout/wrapper.php",$data);	
	}

	// perpustakaan

	function perpustakaan(){
		$data['isi'] = 'page/perpustakaan/index';
		$this->load->view("layout/wrapper.php",$data);	
	}



}
 ?>
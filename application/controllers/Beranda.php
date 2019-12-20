<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/12/2019
 * Time: 21:39
 */

class Beranda extends CI_Controller
{
    public function index(){
        $data['page'] = 'beranda';
        $data['isi'] = 'page/beranda/index';
        $data['jurusan'] = $this->M_crud->read_data("tbl_jurusan","*");
        $data['config'] = $this->M_crud->get_data("tbl_config","*");
        $data['manajemen'] = $this->M_crud->get_data("tbl_manajemen","*","jabatan=1");
        $data['berita'] = $this->M_crud->read_data("tbl_berita","*","type='1'","id desc",null,3);
        $data['gallery'] = $this->M_crud->read_data("tbl_gallery","*",null,"id desc",null,3);
        $data['jurusan'] = $this->M_crud->read_data("tbl_jurusan","*");
        $data['berita'] = $this->M_crud->read_data("tbl_berita","*",null,"id desc",null,3);
        $this->load->view("layout/wrapper.php",$data);
    }

    public function load_data($action=null){
        if($action == 'gallery'){
            $read_data = $this->M_crud->read_data("tbl_gallery","*",null,"RAND()",null,3);
            if($read_data!=null){
                foreach($read_data as $row){
                    $result =$this->M_website->tempGallery($row['image'],$row['title']);
                }
            }else{
                $result = '<h1 class="text-center">Tidak Ada Data</h1>';
            }
            echo json_encode(array('result'=>$result));
        }


    }


}
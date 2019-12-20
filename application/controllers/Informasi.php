<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/12/2019
 * Time: 11:29
 */

class Informasi extends CI_Controller
{
    public function index(){
        $folder = 'informasi'; $type = $_GET['type'];
        $data['isi'] = 'page/'.$folder.'/'.$type;
        $this->load->view("layout/wrapper.php"	,$data);
    }

    public function load_data($action=null){
        $title='';$result='';
        if($action=='tenaga_pendidik'){
            $pagin = $this->M_website->myPagination('v_manajemen','id','jabatan=7',8);
            $read_data = $this->M_crud->read_data('v_manajemen',"*","jabatan='7'","id desc",null,$pagin["perPage"], $pagin['start']);
            if($read_data!=null){
                $title.= "Tenaga Pendidik";
                foreach($read_data as $row){
                    $result.=$this->M_website->tempTwo($row['image'],$row['nama'],$row['nip'],$row['deskripsi']);
                }
            }else{
                $title.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array(
                "pagination_link"   => $pagin['pagination_link'],
                'result'            => $result,
                'title'             => $title
            ));
        }
        elseif($action=='prestasi'){
            $read_header = $this->M_crud->get_data("v_berita","*","id='16'");
            $title.=$read_header['title'];
            $title_body ='Galeri Prestasi';
            $pagin = $this->M_website->myPagination("tbl_gallery",'id','type=8',8);
            $read_data = $this->M_crud->read_data("tbl_gallery","*",'type=8',"id desc",null,$pagin["perPage"], $pagin['start']);
            $header='<div class="col-lg-12">'.html_entity_decode($read_header["content"]).'</div>';
            $body='';
            if($read_data!=null){
                foreach($read_data as $row){
                    $body.=$this->M_website->tempGallery($row['image'],$row['title']);
                }
            }else{
                $body.=/**@lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array(
                'header'=>$header,
                'title'=>$title,
                'result_body'=>$body,
                "pagination_link"   => $pagin['pagination_link'],
                'title_body'=>$title_body
            ));
        }
    }

}
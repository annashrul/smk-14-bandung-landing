<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 19/12/2019
 * Time: 17:45
 */

class Manajemen extends CI_Controller
{
    public function index(){
        $folder = 'manajemen'; $type = $_GET['type'];
        $data['isi'] = 'page/'.$folder.'/'.$type;
        $this->load->view("layout/wrapper.php"	,$data);
    }

    public function load_data($action=null){
        $result='';$tabel = 'v_manajemen';$title='';
        if($action == 'kepala_sekolah'){
            $read_data = $this->M_crud->get_data($tabel,"*","jabatan='1'");
            if($read_data != null){
                $title.= $read_data['nama_jabatan'];
                $result.= $this->M_website->tempOne($read_data["image"],$read_data["nama"],$read_data["nip"],$read_data["nama_jabatan"],$read_data["deskripsi"]);
            }else{
                $title.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));
        }
        elseif ($action == 'kepala_tu'){
            $read_data = $this->M_crud->get_data($tabel,"*","jabatan='2'");
            if($read_data != null){
                $title.= $read_data['nama_jabatan'];
                $result.= $this->M_website->tempOne($read_data["image"],$read_data["nama"],$read_data["nip"],$read_data["nama_jabatan"],$read_data["deskripsi"]);
            }else{
                $title.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));
        }
        elseif ($action == 'wakil_kepala_sekolah'){
            $pagin = $this->M_website->myPagination($tabel,'id','jabatan=3',8);
            $read_data = $this->M_crud->read_data($tabel,"*","jabatan='3'","id desc",null,$pagin["perPage"], $pagin['start']);
            if($read_data!=null){
                $title.= "Wakil Kepala Sekolah";
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
        elseif($action == 'dewan_komite'){
            $pagin = $this->M_website->myPagination($tabel,'id','jabatan=4',8);
            $read_data = $this->M_crud->read_data($tabel,"*","jabatan='4'","id desc",null,$pagin["perPage"], $pagin['start']);
            if($read_data!=null){
                $title.= "Dewan Komite";
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
        elseif($action == 'kajur_kaprog'){
            $pagin=$this->M_website->myPagination($tabel,'id',"jabatan in(5,6)",8);
            $read_data = $this->M_crud->read_data($tabel,"*","jabatan in(5,6)","id desc",null,$pagin["perPage"], $pagin['start']);
            if($read_data!=null){
                $title.= "Kajur & Kaprog";
                foreach($read_data as $row){
                    if($row['jabatan'] == 5){
                        $jabatan = $row['nip'].'<br><br> ( Kajur )';
                    }elseif ($row['jabatan'] == 6){
                        $jabatan =  $row['nip'].'<br><br> ( Kaprog )';
                    }
                    $result.=$this->M_website->tempTwo($row['image'],$row['nama'],$jabatan,$row['deskripsi']);
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

    }



}
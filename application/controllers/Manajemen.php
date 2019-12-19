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
        $tabel = 'v_manajemen';
        $folder = 'manajemen'; $type = $_GET['type']; $data['config'] = $this->m_crud->get_data("tbl_config","site_title");
        if($type == 'kepala_sekolah'){
            $data['kepala_sekolah'] = $this->m_crud->get_data($tabel,"*","jabatan='1'");
            $data['isi'] = 'page/'.$folder.'/'.$type;
        }elseif($type == 'kepala_tu'){
            $data['kepala_tu'] = $this->m_crud->get_data($tabel,"*","jabatan='2'");
            $data['isi'] = 'page/'.$folder.'/'.$type;
        }elseif($type == 'wakil_kepala_sekolah'){
            $data['wakil_kepala_sekolah'] = $this->m_crud->read_data($tabel,"*","jabatan='3'");
            $data['isi'] = 'page/'.$folder.'/'.$type;
        }elseif($type == 'dewan_komite'){
            $data['dewan_komite'] = $this->m_crud->read_data($tabel,"*","jabatan='4'");
            $data['isi'] = 'page/'.$folder.'/'.$type;
        }elseif($type == 'kajur_kaprog'){
            $data['kajur'] = $this->m_crud->read_data($tabel,"*","jabatan='5'");
            $data['kaprog'] = $this->m_crud->read_data($tabel,"*","jabatan='6'");
            $data['isi'] = 'page/'.$folder.'/'.$type;
        }
        $this->load->view("layout/wrapper.php"	,$data);
    }

    public function load_data($action=null){
        $result='';$tabel = 'v_manajemen';$title='';
        if($action == 'kepala_sekolah'){
            $read_data = $this->m_crud->get_data($tabel,"*","jabatan='1'");
            if($read_data != null){
                $title.= $read_data['nama_jabatan'];
                $result.= $this->m_website->tempOne($read_data["image"],$read_data["nama"],$read_data["nip"],$read_data["nama_jabatan"],$read_data["deskripsi"]);
            }else{
                $title.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));
        }
        elseif ($action == 'kepala_tu'){
            $read_data = $this->m_crud->get_data($tabel,"*","jabatan='2'");
            if($read_data != null){
                $title.= $read_data['nama_jabatan'];
                $result.= $this->m_website->tempOne($read_data["image"],$read_data["nama"],$read_data["nip"],$read_data["nama_jabatan"],$read_data["deskripsi"]);
            }else{
                $title.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));
        }
        elseif ($action == 'wakil_kepala_sekolah'){
            $pagin = $this->m_website->myPagination($tabel,'id','jabatan=3');
            $read_data = $this->m_crud->read_data($tabel,"*","jabatan='3'","id desc",null,$pagin["perPage"], $pagin['start']);
            if($read_data!=null){
                $title.= "Wakil Kepala Sekolah";
                foreach($read_data as $row){
                    $result.=$this->m_website->temp2($row['image'],$row['nip'],$row['nama'],$row['deskripsi']);
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
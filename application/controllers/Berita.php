<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/12/2019
 * Time: 21:43
 */

class Berita extends CI_Controller
{
    public function index(){
        $data['isi'] = 'page/berita/index';
        $this->load->view("layout/wrapper.php",$data);
    }
    function load_data($action=null){
        if($action == "get_list"){
            $pagin = $this->M_website->myPagination('v_berita','id',"type='1'",6);
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
        }
        elseif ($action == 'get_home'){
            $result = '';
            $read_data = $this->M_crud->read_data("v_berita","*","type='1'","id desc",null,3);
            if($read_data!=null){
                foreach ($read_data as $row):
                    $result.=$this->M_website->tempNews($row['image'],base_url("detail?type=berita&title=".$row['slug']),$row['created_at'],$row['nama'],$row['title'],$row['content']);
                endforeach;
            }else{
                $result.='<h1 class="text-center">Tidak Ada Data</h1>';
            }
            echo json_encode(array('result'=>$result));
        }
    }
}
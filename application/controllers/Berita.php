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
            $pagin = $this->M_website->myPagination('v_berita','id',"type!='3' and status='1' and slug_category='".$_POST['type']."' or title like '%".$_POST['type']."%' or content like '%".$_POST['type']."%' or tags like '%".$_POST['type']."%' ",6);
            $read_data = $this->M_crud->read_data(
                "v_berita","*",
                "type!='3' and status='1' and slug_category='".$_POST['type']."' or title like '%".$_POST['type']."%' or content like '%".$_POST['type']."%' or tags like '%".$_POST['type']."%'","id desc",null,$pagin["perPage"], $pagin['start']
            );
            $res_index = "";
            if($read_data != null){
                foreach ($read_data as $row):
                    $res_index.=$this->M_website->tempNews($row['id'],$row['image'],$row['category'],base_url("detail?type=berita&title=".$row['slug']),$row['created_at'],$row['nama'],$row['title'],$row['content'],$row['likes']);
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
            $read_data = $this->M_crud->read_data("v_berita","*","status='1' and type='1'","id desc",null,3);
            if($read_data!=null){
                foreach ($read_data as $row):
                    $result.=$this->M_website->tempNews($row['id'],$row['image'],$row['category'],base_url("detail?type=berita&title=".$row['slug']),$row['created_at'],$row['nama'],$row['title'],$row['content'],$row['likes']);
                endforeach;
            }else{
                $result.='<h1 class="text-center">Tidak Ada Data</h1>';
            }
            echo json_encode(array('result'=>$result));
        }
        elseif ($action == 'detail'){
            $read_data=$this->M_crud->get_data("v_berita","*","status='1' and slug='".$_POST['type']."'");
            $result = '
                <div class="course-details__content">
                    <p class="course-details__author">
                        <img src="'.base_url().'assets/images/team-1-1.jpg" alt="">
                        Oleh <a href="#">'.$read_data["nama"].'</a>
                    </p>
                    <div class="course-details__top">
                        <div class="course-details__top-left">
                            <h2 class="course-details__title">'.$read_data["title"].'</h2>
                        </div>
                        <div class="course-details__top-right">
                            <a href="'.base_url("berita?title=".$read_data["slug_category"]).'" class="course-one__category"><?=$read_data[\'category\']?></a>
                        </div>
                    </div>
                    <div class="course-one__image">
                        <img src="'.$read_data["image"].'" alt="">
                    </div>
                    <div class="tab-content course-details__tab-content ">
                        <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                            <p class="course-details__tab-text">
                                '.$read_data["content"].'
                            </p>
                        </div>
                        <div class="course-one__meta">
                            <a href="#!"><i class="far fa-clock"></i> '.$read_data["created_at"].'</a>
                            <a href="#!"><i class="far fa-heart" onclick="isLike('."'".$read_data['id']."'".')"></i> '.$read_data["likes"].' disukai</a>
                        </div>
                    </div>
                </div>
            ';

            echo json_encode(array('result_table'=>$result));
        }
    }

    function isLike(){
        $response=array();
        $getLike = $this->M_crud->get_data("tbl_likes","*","id_siswa='".$this->session->id."' and id_content='".$this->input->post('idContent')."'");
        $data = array(
            "id_content"=>$this->input->post('idContent'),
            "id_siswa"=>$this->session->id
        );
        if(count($getLike) > 1){
            $this->M_crud->delete_data("tbl_likes",array("id_siswa"=>$this->session->id,"id_content"=>$this->input->post('idContent')));
            $response['status'] = 'failed';
            $response['msg'] = 'ges di like euy';
        }else{
            $response['status'] = 'success';
            $response['msg'] = 'can di like euy';
            $this->M_crud->create_data("tbl_likes",$data);
        }

        echo json_encode($response);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 19/12/2019
 * Time: 17:17
 */

class Selayang_pandang extends CI_Controller
{
    public function index(){
        $data['isi'] = 'page/selayang/'.$_GET['type'];
        $this->load->view("layout/wrapper.php",$data);
    }

    public function load_data($action=null){
        $result='';$title = ''; $table = 'v_berita';
        if($action == 'sejarah'){
            $read_data = $this->m_crud->get_data($table,"*","id='5'");
            $title.=$read_data['title']!=null?$read_data['title']:'Tidaka Ada data';
            if($read_data != null){
                $result.= /** @lang text */
                '<div class="col-lg-6">
                    <div class="blog-one__single">
                        <div class="blog-one__image2">
                            <img src="'.$read_data["image"].'" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <h2 class="blog-one__title">'.$read_data["title"].'</h2>
                            <p class="text-left">'.$read_data["content"].'</p>
                        </div>
                    </div>
                </div>';
            }
            else{
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));

        }
        elseif($action == 'visi_misi'){
            $read_data = $this->m_crud->get_data($table,"*","id='6'");
            $title.=$read_data['title']!=null?$read_data['title']:'Tidaka Ada data';
            if($read_data!=null){
                $result.=/** @lang text */'
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <h2 class="blog-one__title">'.$read_data["title"].'</h2>
                            <p class="blog-one__text" style="font-weight: bold;">'.$read_data["content"].'</p>
                        </div>
                    </div>
                </div>';
            }
            else{
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));

        }
        elseif($action == 'budaya'){
            $read_data = $this->m_crud->get_data($table,"*","id='7'");
            $title.=$read_data['title']!=null?$read_data['title']:'Tidaka Ada data';
            if($read_data != null){
                $result.=/** @lang text */'
                <div class="col-lg-6">
                    <div class="blog-one__single">
                        <div class="blog-one__image2">
                            <img src="'.$read_data["image"].'" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <h2 class="blog-one__title">'.$read_data["title"].'</h2>
                            <p class="text-left">'.$read_data["content"].'</p>
                        </div>
                    </div>
                </div>
                ';
            }
            else{
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));

        }
        elseif($action == 'landasan_hukum'){
            $read_data = $this->m_crud->get_data($table,"*","id='8'");
            $title.=$read_data['title']!=null?$read_data['title']:'Tidaka Ada data';
            if($read_data!=null){
                $result.=/** @lang text */'
                <div class="col-lg-6">
                    <div class="blog-one__single">
                        <div class="blog-one__image2">
                            <img src="'.$read_data["image"].'" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <h2 class="blog-one__title">'.$read_data["title"].'</h2>
                            <p class="text-left">'.$read_data["content"].'</p>
                        </div>
                    </div>
                </div>
                ';
            }else{
                $result.=/** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
            }
            echo json_encode(array('result'=> $result,'title'=> $title));
        }
        elseif($action == 'fasilitas'){
            $pagin = $this->m_website->myPagination('tbl_gallery', "id", "type='5'");
            $read_data = $this->m_crud->read_data("tbl_gallery","*","type='5'","id desc",null,$pagin["perPage"], $pagin['start']);
//            $count = $this->m_crud->count_data('tbl_gallery', "id", "type='5'");
//            $config = array();
//            $config["base_url"] 				= "#";
//            $config["total_rows"] 			= $count;
//            $config["per_page"] 				= 8;
//            $config["uri_segment"] 			= 4;
//            $config["num_links"] 				= 1;
//            $config["use_page_numbers"] = TRUE;
//            $config["full_tag_open"] = '<ul class="pagination pagination-sm">';
//            $config["full_tag_close"] = '</ul>';
//            $config['first_link'] = '&laquo;';
//            $config["first_tag_open"] = '<li>';
//            $config["first_tag_close"] = '</li>';
//            $config['last_link'] = '&raquo;';
//            $config["last_tag_open"] = '<li>';
//            $config["last_tag_close"] = '</li>';
//            $config['next_link'] = '&gt;';
//            $config["next_tag_open"] = '<li>';
//            $config["next_tag_close"] = '</li>';
//            $config["prev_link"] = "&lt;";
//            $config["prev_tag_open"] = "<li>";
//            $config["prev_tag_close"] = "</li>";
//            $config["cur_tag_open"] = "<li class='active'><a href='#'>";
//            $config["cur_tag_close"] = "</a></li>";
//            $config["num_tag_open"] = "<li>";
//            $config["num_tag_close"] = "</li>";
//            $this->pagination->initialize($config);
//            $hal  	= $this->uri->segment(4);
//            $start 	= ($hal - 1) * $config["per_page"];
//            $read_data = $this->m_crud->read_data("tbl_gallery","*","type='5'","id desc",null,$config["per_page"], $start);
            if($read_data != null){
                $title.='Fasilitas';
                foreach($read_data as $row){
                    $result.= /** @lang text */'
                        <div class="col-lg-4 col-xs-6">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="'.$row["image"].'" alt="">
                                </div>
                                <div class="blog-one__content text-center">
                                    <h2>'.$row["title"].'</h2>
                                    <p class="blog-one__text">'.$row["deskripsi"].'</p>
                                </div>
                            </div>
                        </div>
                    ';
                }

            }else{
                $title.='Tidak Ada Data';
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
<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/12/2019
 * Time: 14:23
 */

class Detail extends CI_Controller
{
    public function index(){
        if($_GET['type']=='lowongan_kerja'){
            $late_post = $this->M_crud->read_data("v_berita","*","type='2' and slug != '".$_GET['title']."'","RAND()",null,3);
            $read_data = $this->M_crud->get_data("v_berita","*","slug='".$_GET['title']."'");
        }
        elseif ($_GET['type'] == 'berita'){
            $late_post = $this->M_crud->read_data("v_berita","*","type='1' and slug != '".$_GET['title']."'","RAND()",null,3);
            $read_data = $this->M_crud->get_data("v_berita","*","slug='".$_GET['title']."'");
        }


        $data['isi'] = 'page/berita/detail_berita';
        $data['read_data'] = $read_data;
        $data['late_post'] = $late_post;
        $this->load->view("layout/wrapper",$data);
    }

}
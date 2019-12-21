<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/12/2019
 * Time: 21:39
 */

class Beranda extends CI_Controller
{
    function __construct() {
        parent::__construct();
        // Load the captcha helper
        $this->load->helper('captcha');
    }
    public function chaptaConfig(){
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
            'img_width'     => '160',
            'img_height'    => 76,
            'word_length'   => 4,
            'font_size'     => 20,
            'font_path'     => './path/to/fonts/texb.ttf',
            'expiration' => 60
        );
        return $config;
    }

    public function index(){
        $config = $this->chaptaConfig();
        $captcha = create_captcha($config);
        $this->session->set_userdata('captchaCode',$captcha['word']);
        // Send captcha image to view
        $data['captchaImg'] = $captcha['image'];
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
    public function refresh(){
        $config = $this->chaptaConfig();
        $captcha = create_captcha($config);
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);
        echo $captcha['image'];
    }

    public function komentar(){
        $config = $this->chaptaConfig();
        $captcha = create_captcha($config);
        $response = array();
        $input = $this->input->post();

        $inputCaptcha = $input['captcha'];
        $sessCaptcha = $this->session->userdata('captchaCode');
        if($inputCaptcha === $sessCaptcha){
            $this->session->unset_userdata('captchaCode');
            $this->session->set_userdata('captchaCode',$captcha['word']);
            $this->M_crud->create_data("tbl_contact",array('nama'=>$input['nama'],'email'=>$input['email'],'pesan'=>$input['pesan']));
            $response['status']='success';
            $response['msg']='Berhasil Mengirim pesan';
        }else{
            $response['status']='failed';
            $response['msg']='chapta tidak sama';
        }
        echo json_encode($response);
    }

}
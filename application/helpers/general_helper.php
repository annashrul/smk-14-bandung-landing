<?php

function assets($path){
    return base_url().'assets/'.$path;
}

function dd($arr){
    var_dump($arr);die();
}

function urls($path){
    return base_url().'site/'.$path;
}
function _uploadImage(){
    $dis = & get_instance();
    $config['upload_path']          = './upload/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = time();
    $config['overwrite']			= true;
    $config['max_size']             = 3064; // 3MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $dis->load->library('upload', $config);

    if ($dis->upload->do_upload('image')) {
        return $dis->upload->data("file_name");
    }else{
        $error = array('error' => $dis->upload->display_errors());
        // dd($error);
    }
    
    return "default.jpg";
}
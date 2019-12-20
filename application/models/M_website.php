<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 19/12/2019
 * Time: 20:00
 */

class M_website extends CI_Model
{
    public function tempOne($img,$name,$nip,$jabatan,$desc){
        return /** @lang text */
            '<div class="col-lg-6">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="'.$img.'" alt="" style="width:80%!important;">
                    </div>
                    <div class="team-one__content">
                        <h2 class="team-one__name"><a href=#"> '.$name.'</a></h2>
                        <p class="team-one__designation">NIP : '.$nip.'</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-details__content">
                    <h2 class="team-details__title">'.$jabatan.'</h2>
                    <p class="team-details__text" style="text-align:justify">'.strip_tags($desc).'</p>
                </div>
            </div>
        ';
    }

    public function tempTwo($img,$name,$nip,$desc){
        if(strlen($desc) > 30){
            $potong = substr($desc,0,30).'....';
        }else{
            $potong = $desc;
        }
        return /** @lang text */'
            <div class="col-lg-3 col-xs-6" style="height:400px;">
                <div class="team-one__single">
                    <div class="team-one__image" style="height:200px!important;">
                        <img src="'.$img.'" alt="" style="width:80%!important;height:100%!important;">
                    </div>
                    <div class="team-one__content">
                        <h2 class="team-one__name">'.$name.'</h2>
                        <p class="team-one__designation">NIP : '.$nip.'</p>
                        <p class="team-one__text">'.strip_tags($potong).'</p>
                    </div>
                </div>
            </div>
        
        ';
    }

    public function tempThree($img,$title,$content){
        return /** @lang text */'
        <div class="col-md-12">
            <div class="col-lg-6">
                <div class="team-one__single">
                    <div class="blog-one__image2">
                        <img src="'.$img.'" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-details__content">
                    <h2 class="team-details__title">'.$title.'</h2>
                    <p class="team-details__text" style="text-align:justify">'.strip_tags($content).'</p>
                </div>
            </div>
        </div>
        <hr/>
        ';
    }


    public function tempNews($image,$url,$date,$name,$title,$content){
        if(strlen($title) > 20){
            $subTitle = substr($title,0,20).' .....';
        }else{
            $subTitle = $title;
        }
        if(strlen($content) > 50){
            $subContent = substr($content,0,50).' .....';
        }else{
            $subContent = $content;
        }
        return /** @lang text */
            '<div class="col-lg-4">
                <div class="blog-one__single">
                    <div class="blog-one__image">
                        <img src="'.$image.'" alt="">
                        <a class="blog-one__plus" href="'.$url.'"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="blog-one__content text-center">
                        <div class="blog-one__meta">
                            <a data-toggle="tooltip" data-placement="top" title="Tanggal '.date("Y-m-d",strtotime($date)).'" href="#"><i class="fa fa-calendar-alt"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Oleh '.$name.'" href="#"><i class="fa fa-user"></i></a>
                        </div>
                        <h4>'.$subTitle.'</h4>
                        <p class="blog-one__text">'.html_entity_decode($subContent).'</p>
                        <a href="'.$url.'" class="blog-one__link">Selengkapnya</a>
                    </div>
                    
                </div>
            </div>
        ';
    }

    public function tempGallery($image,$title){
        return /** @lang text */'
        <div class="col-lg-4 col-md-6">
            <div class="gallery-one__single">
                <img src="'.$image.'" alt="" style="height:300px;width:100%;">
                <a href="'.$image.'" class="gallery-one__popup img-popup">
                    <p class="text-center" style="color: white!important;">'.$title.'</p>
                </a>
            </div>
        </div>
        
        ';
    }


    public function myPagination($table,$field,$where,$page){
        $count = $this->M_crud->count_data($table, $field, $where);
        $config = array();
        $config["base_url"] 				= "#";
        $config["total_rows"] 			= $count;
        $config["per_page"] 				= $page;
        $config["uri_segment"] 			= 4;
        $config["num_links"] 				= 1;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination pagination-sm">';
        $config["full_tag_close"] = '</ul>';
        $config['first_link'] = '&laquo;';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config['last_link'] = '&raquo;';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $this->pagination->initialize($config);
        $hal  	 = $this->uri->segment(4);
        return $data = array(
            'start'  => ($hal - 1) * $config["per_page"],
            'perPage'=> $config["per_page"],
            'pagination_link' => $this->pagination->create_links()
        );
    }

}
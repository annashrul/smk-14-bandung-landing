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
                        <img src="'.$img.'" alt="">
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
                    <p class="team-details__text" style="text-align:justify">'.$desc.'</p>
                </div>
            </div>
        ';
    }

    public function tempTwo($img,$name,$nip,$desc){
        return /** @lang text */'
            <div class="col-lg-3">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="'.$img.'" alt="">
                    </div>
                    <div class="team-one__content">
                        <h2 class="team-one__name">'.$name.'</h2>
                        <p class="team-one__designation">'.$nip.'</p>
                        <p class="team-one__text">'.$desc.'</p>
                    </div>
                </div>
            </div>
        
        ';
    }

    public function myPagination($table,$field,$where){
        $count = $this->m_crud->count_data($table, $field, $where);
        $config = array();
        $config["base_url"] 				= "#";
        $config["total_rows"] 			= $count;
        $config["per_page"] 				= 1;
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
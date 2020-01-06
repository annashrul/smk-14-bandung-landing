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
        </div>';
    }

    public function tempTwo($img,$name,$nip,$desc){
        $potong = strlen($desc) > 30 ? substr($desc,0,30).'....' : $desc;
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
        </div>';
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

    /*GALLERY, PRESTASI*/
    public function tempFour($img,$tgl,$name,$title,$slug){
        return /** @lang text */'
        <div class="item">
            <div class="blog-two__single" style="background-image: url('.$img.')">
                <div class="blog-two__inner">
                    <a href="#" class="blog-two__date">
                        <span>'.date("d",strtotime($tgl)).'</span>
                        '.date("M",strtotime($tgl)).'
                    </a>
                    <div class="blog-two__meta">
                        <a href="#">oleh : '.$name.'</a>
                    </div>
                    <h3 class="blog-two__title">
                        <a href="#">'.$title.'</a>
                    </h3>
                </div>
            </div>
        </div>
        ';
    }

    public function tempNews($id,$image,$category,$url,$date,$name,$title,$content,$count,$slug_category,$isTrue){
        $hati = $isTrue == false ? 'color:red;' : 'color:blue;';
        $subTitle = strlen($title) > 15 ? substr($title,0,15).' .....' : $title;
        $subContent = strlen($content) > 50 ? substr($content,0,50).' .....' : $content;
        return /** @lang text */'
        <div class="col-lg-4">
            <div class="course-one__single">
                <div class="course-one__image">
                    <img src="'.$image.'" class="img-news" alt="" style="height:250px;">
                </div>
                <div class="course-one__content">
                    <a href="'.$slug_category.'" class="course-one__category">'.$category.'</a>
                    <div class="course-one__admin">
                        <img src="assets/images/team-1-1.jpg" alt="">
                        by <a href="#">'.$name.'</a>
                    </div>
                    <h2 class="course-one__title"><a href="'.$url.'" id="cek">'.$subTitle.'</a></h2>
                    <p class="text-left">'.html_entity_decode($subContent).'</p>
                    <div class="course-one__meta">
                        <a href="course-details.html"><i class="far fa-clock"></i> '.date("Y-m-d",strtotime($date)).'</a>
                        <a href="javascript:void(0)"onclick="isLike('."'".$id."'".')"><i class="far fa-heart" style="'.$hati.'""></i> '.$count.' disukai</a>
                    </div>
                    <a href="'.$url.'" class="course-one__link">Selengkapnya</a>
                </div>
            </div>
        </div>';
    }

    public function tempGallery($image,$title){
        return /** @lang text */'
        <div class="col-lg-4 col-md-6">
            <div class="gallery-one__single">
                <img src="'.$image.'" alt="" class="img-gallery" style="height:300px;width:100%;">
                <a href="'.$image.'" class="gallery-one__popup img-popup">
                    <p class="text-center" style="color: white!important;">'.$title.'</p>
                </a>
            </div>
        </div>
        ';
    }


    public function myPagination($table,$field,$where,$page){
        $count = $this->M_crud->count_data($table, $field, $where);
        $config = array(
            "base_url"          => "#",
            "total_rows"        => $count,
            "per_page"          => $page,
            "uri_segment"       => 4,
            "num_links"         => 1,
            "use_page_numbers"  => TRUE,
            "full_tag_open"     => /** @lang text */'<ul class="pagination pagination-sm">',
            "full_tag_close"    => /** @lang text */'</ul>',
            "first_link"        => /** @lang text */'&laquo;',
            "first_tag_open"    => /** @lang text */'<li>',
            "first_tag_close"   => /** @lang text */'</li>',
            "last_link"         => /** @lang text */'&raquo;',
            "last_tag_open"     => /** @lang text */'<li>',
            "last_tag_close"    => /** @lang text */'</li>',
            "next_link"         => /** @lang text */'&gt;',
            "next_tag_open"     => /** @lang text */'<li>',
            "next_tag_close"    => /** @lang text */'</li>',
            "prev_link"         => /** @lang text */"&lt;",
            "prev_tag_open"     => /** @lang text */"<li>",
            "prev_tag_close"    => /** @lang text */"</li>",
            "cur_tag_open"      => /** @lang text */"<li class='active'><a href='#'>",
            "cur_tag_close"     => /** @lang text */"</a></li>",
            "num_tag_open"      => /** @lang text */"<li>",
            "num_tag_close"     => /** @lang text */"</li>"
        );

        $this->pagination->initialize($config);
        $hal  	 = $this->uri->segment($config['uri_segment']);
        return $data = array(
            'start'             => ($hal - 1) * $config["per_page"],
            'perPage'           => $config["per_page"],
            'pagination_link'   => $this->pagination->create_links()
        );
    }

    public function noData(){
        return /** @lang text */'<div class="col-md-12"><h1 class="text-center">Tidak Ada Data</h1></div>';
    }

}
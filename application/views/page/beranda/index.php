<?php $url = base_url() .'assets'?>
<style>
    .banner-one__slide:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:transparent!important;
        opacity: 0.4;
    }

</style>
<?php
    $ke = '';$slide='';$gbr='';$btn='';
    $read_data = $this->M_crud->read_data("tbl_gallery","*","status=1 and type='7'");
    if(count($read_data) > 0){
        foreach($read_data as $key=>$value){
            $ke.=$key;
            $gbr =$value['image'];
            $slide.= /** @lang text */'
            <div class="banner-one__slide banner-one__slide-one" style="background-image: url('."'$gbr'".');">
                <div class="container">
                    <div class="banner-one__bubble-1"></div>
                    <div class="banner-one__bubble-2"></div>
                    <div class="banner-one__bubble-3"></div>
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <h3 class="banner-one__title banner-one__light-color">'.$value["title"].' </h3>
                            <p class="banner-one__tag-line">'.$value["deskripsi"].' </p>
                            <a href="'.$value["link"].'" class="thm-btn banner-one__btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    }
    if(count($read_data) > 1){
        $btn.= /** @lang text */'
            <div class="banner-carousel-btn">
                <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
                <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
            </div>
        ';
    }
?>


<div class="banner-wrapper">
    <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel" id="result_slider">
        <?=$slide?>
    </section>
    <?=$btn?>
</div><!-- /.banner-wrapper -->

<section class="about-two sr-btm">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__content">
                    <div class="block-title text-left">
                        <h2 class="block-title__title">KEPALA SEKOLAH<br><?=$config['site_title']?></h2>
                    </div>
                    <p class="about-two__text"style="text-align:justify">
                        Nama : <?=$manajemen['nama']?><br>
                        NIP : <?=$manajemen['nip']?><br>
                        <?=$manajemen['deskripsi']?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-xl-end justify-content-sm-center">
                <div class="about-two__image">
                    <span class="about-two__image-dots"></span>
                    <img src="<?=$manajemen['image']?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Kepala Sekolah -->

<!-- Jurusan -->
<?php $img = base_url().'assets/img/jurusan.jpg';?>
<section class="course-one__top-title home-one sr-btm">
    <div class="container">
        <div class="block-title mb-0">
            <div class="block-title text-center">
                <h2 class="inner-banner__title">Jurusan<br>
                </h2>
            </div>
            <div class="course-category-one__carousel owl-carousel owl-theme">
                <?php foreach($jurusan as $row) : ?>
                    <div class="item">
                        <div class="course-category-one__single color-1 headline">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-desktop"></i>
                            </div>
                            <h3 class="course-category-one__title"><a href="<?=base_url("keahlian?type=".$row['slug'])?>"><?=$row['title']?></a></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="course-one__top-title__curve"></div>
</section>

<!-- End Jurusan -->


<!-- Berita -->
<section class="blog-one blog-page sr-btm">
    <div class="container">
        <h2 class="inner-banner__title" style="text-align:center;color:#011928;padding:30px">Berita Terbaru</h2>
        <div class="row" id="result_berita">

        </div>
</section>

<!-- Galeri -->

<section class="inner-banner sr-btm">
    <div class="container">
        <h2 class="inner-banner__title text">Gallery</h2>
    </div>
</section>


<section class="gallery-one sr-btm">
    <div class="container">
        <div class="row">
            <?php if($gallery != null){ foreach($gallery as $row):?>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-one__single">
                        <img src="<?=$row['image']?>" alt="" style="height:300px;width:100%;">
                        <a href="<?=$row['image']?>" class="gallery-one__popup img-popup">
                            <p class="text-center" style="font-size:20px!important;color: white!important;"><?=$row['title']?></p>
                        </a>
                    </div>
                </div>

            <?php endforeach;}else{ ?>
                <h1 class="text-center">Data Tidak Tersedia</h1>
            <?php } ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section class="brand-two sr-btm"">
    <div class="container">
        <div class="block-title">
            <h2 class="block-title__title" style="text-align:center">Our company & partners</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="brand-one__carousel owl-carousel owl-theme">
            <?php $read_data = $this->M_crud->read_data("tbl_gallery","*","type='9'");foreach($read_data as $row):?>
            <div class="item">
                <img src="<?=$row['image']?>" alt="">
            </div><!-- /.item -->
            <?php endforeach; ?>
        </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
    </div><!-- /.container -->
</section>


<!-- MAPS -->
<section class="inner-banner sr-btm"">
    <div class="container">
        <h2 class="inner-banner__title text">Kontak</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section>
<section class="contact-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="contact-one__title text-center">Silahkan<br>hubungi kami</h2><!-- /.contact-one__title -->
                <form action="#" method="post" id="form_input" class="contact-one__form">
                    <div class="row low-gutters">
                        <div class="col-lg-6">
                            <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="email" name="email" id="email" placeholder="Masukan Email Anda">
                        </div><!-- /.col-lg-6 -->


                        <div class="col-lg-12">
                            <textarea placeholder="Tulis Masukan Disini ...." name="pesan" id="pesan"></textarea>

                        </div><!-- /.col-lg-12 -->

                        <div class="col-md-4 col-xs-6">
                            <input type="text" name="captcha" id="captcha" placeholder="Masukan Kode">
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <p id="captImg"><?=$captchaImg; ?></p>
<!--                            <a href="javascript:void(0);" class="refreshCaptcha" ><img style="height: 50px;" src="--><?php //echo base_url().'assets/images/refresh.png'; ?><!--"/></a>-->
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <button type="button" onclick="kirim()" class="contact-one__btn thm-btn">Kirim</button>
                        </div>

                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->

            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJfxip1i3oaC4Rz-hAAQOPSQ0" class="google-map__contact" allowfullscreen></iframe>
            </div>
        </div>
    </div><!-- /.container -->
</section>
<style>
    #captImg{float:left;}
    .refreshCaptcha {position:relative;top:27px;}
</style>

<script>

	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	function kirim(){
		var nama = $("#nama");
		var email = $("#email");
		var captcha = $("#captcha");
		var pesan = $("#pesan");
		if(nama.val()==''||email.val()==''||captcha.val()==''||pesan.val()==''){
			alert('lengkapi form yang tersedia');
			$("#form_input")[0].reset();
        }else{
			if(validateEmail(email.val())){
				console.log(captcha.val());
				dynamic_ajax(
					"<?=base_url().'beranda/komentar'?>",
					{nama:nama.val(),email:email.val(),captcha:captcha.val(),pesan:pesan.val()},
					function(res){
						if(res.status == 'success'){
							alert(res.msg);
							$("#form_input")[0].reset();
						}else{
							alert(res.msg)
						}
					});
            }else{
				alert('email tidak valid');
            }

        }

    }
	$(document).ready(function(){
		load_berita();
	});
	function load_berita(){
		dynamic_ajax("<?=base_url().'berita/load_data/get_home'?>",null,function(res){
			$("#result_berita").html(res.result);
		});
	}
	function isLike(idContent){
		var id = "<?=$this->session->id?>";
		if(id != ''){
			dynamic_ajax("<?=base_url().'berita/isLike'?>",{idContent:idContent},function(res){
				if(res.status === 'success'){
					console.log(res.msg);
					load_berita();
					$("#love").css('color','red');
				}else{
					console.log(res.msg);
					load_berita();
					$("#love").css('color','white');
				}
			})
        }


	}

</script>


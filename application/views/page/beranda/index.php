<?php $url = base_url() .'assets'?>
<div class="banner-wrapper">
    <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel">
        <div class="banner-one__slide banner-one__slide-one">
            <div class="container">
                <div class="banner-one__bubble-1"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div><!-- /.banner-one__bubble- -->
                <img src="assets/images/slider-1-scratch.png" alt="" class="banner-one__scratch">
                <img src="assets/images/slider-1-person-1.png" class="banner-one__person" alt="">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">SMK Negeri <br>
                            14 Bandung</h3><!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">Siapkah dirimu untuk bersaing?</p><!-- /.banner-one__tag-line -->
                        <a href="#" class="thm-btn banner-one__btn">Di era 4.0</a>
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner-one__slide -->
        <div class="banner-one__slide banner-one__slide-two">
            <div class="container">
                <div class="banner-one__bubble-1"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-2"></div><!-- /.banner-one__bubble- -->
                <div class="banner-one__bubble-3"></div><!-- /.banner-one__bubble- -->
                <img src="assets/images/slider-1-scratch.png" alt="" class="banner-one__scratch">
                <img src="assets/images/slider-1-person-2.png" class="banner-one__person" alt="">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <h3 class="banner-one__title banner-one__light-color">Kamilah <br>
                            Solusinya</h3><!-- /.banner-one__title -->
                        <p class="banner-one__tag-line">are you ready to learn?</p><!-- /.banner-one__tag-line -->
                        <a href="#" class="thm-btn banner-one__btn">Learn More</a>
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner-one__slide -->
    </section><!-- /.banner-one -->
    <div class="banner-carousel-btn">
        <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
        <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
    </div><!-- /.banner-carousel-btn -->

</div><!-- /.banner-wrapper -->

<!-- Kepala Sekolah -->

<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__content">
                    <div class="block-title text-left">
                        <h2 class="block-title__title">KEPALA SEKOLAH<br>
                            <?=$config['site_title']?></h2><!-- /.block-title__title -->
                    </div><!-- /.block-title -->
                    <p class="about-two__text"style="text-align:justify">Nama : <?=$manajemen['nama']?><br>
                        NIP : <?=$manajemen['nip']?><br>

                        <?=$manajemen['deskripsi']?>
                    </p><!-- /.about-two__text -->

                </div><!-- /.about-two__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 d-flex justify-content-xl-end justify-content-sm-center">
                <div class="about-two__image">
                    <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                    <img src="<?=$manajemen['image']?>" alt="">
                </div><!-- /.about-two__image -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-two -->

<!-- End Kepala Sekolah -->

<!-- Jurusan -->
<?php $img = base_url().'assets/img/jurusan.jpg';?>
<section class="course-one__top-title home-one">
    <div class="container">
        <div class="block-title mb-0">
            <div class="block-title text-center">
                <h2 class="inner-banner__title">Jurusan<br>
                </h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="course-category-one__carousel owl-carousel owl-theme">
                <?php foreach($jurusan as $row) : ?>
                    <div class="item">
                        <div class="course-category-one__single color-1 headline">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#"><?=$row['title']?></a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                <?php endforeach; ?>
            </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->
        </div><!-- /.block-title -->
    </div><!-- /.container -->
    <div class="course-one__top-title__curve"></div><!-- /.course-one__top-title__curve -->
</section><!-- /.course-one__top-title -->

<!-- End Jurusan -->


<!-- Berita -->
<section class="blog-one blog-page">
    <div class="container">
        <h2 class="inner-banner__title" style="text-align:center;color:#011928;padding:30px">Berita Terbaru</h2><!-- /.inner-banner__title -->
        <div class="row">
            <?php foreach($berita as $row): ?>
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="<?=$row['image']?>" alt="">
                            <a class="blog-one__plus" href="<?=base_url();?>Menu_controller/berita/<?=$row['slug']?>"><i class="kipso-icon-plus-symbol"></i>
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content text-center">
                            <div class="blog-one__meta">
                                <a data-toggle="tooltip" data-placement="top" title="Like" href="#"><i class="fa fa-heart"></i></a>
                                <a data-toggle="tooltip" data-placement="top" title="Share" href="#"><i class="fa fa-share "></i></a>
                            </div><!-- /.blog-one__meta -->
                            <h2 class="blog-one__title"><a href="<?=base_url();?>Menu_controller/berita"><?=$row['title']?></a>
                            </h2><!-- /.blog-one__title -->
                            <p class="blog-one__text"><?=substr(strip_tags($row['content']),0,100)?></p><!-- /.blog-one__text -->
                            <a href="<?=base_url();?>Menu_controller/berita/<?=$row['slug']?>" class="blog-one__link">Selengkapnya</a><!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
            <?php endforeach; ?>

        </div><!-- /.container -->
</section><!-- /.blog-one blog-page -->

<!-- Galeri -->

<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title text">Gallery</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->


<section class="gallery-one">
    <div class="container">
        <div class="row">

            <?php if($gallery != null){ foreach($gallery as $row):?>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-one__single">
                    <img src="<?=$row['image']?>" alt="">
                    <a href="<?=$row['image']?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i><!-- /.kipso-icon-plus-symbol --></a>
                </div><!-- /.gallery-one__single -->
            </div><!-- /.col-lg-4 -->
            <?php endforeach;}else{ ?>
                <h1 class="text-center">Data Tidak Tersedia</h1>
            <?php } ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.gallery-one -->

<section class="brand-two ">
    <div class="container">
        <div class="block-title">
            <h2 class="block-title__title" style="text-align:center">Our company & partners</h2><!-- /.block-title__title -->
        </div><!-- /.block-title -->
        <div class="brand-one__carousel owl-carousel owl-theme">
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand-1-1.png" alt="">
            </div><!-- /.item -->
        </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
    </div><!-- /.container -->
</section><!-- /.brand-one -->


<!-- MAPS -->
<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title text">Kontak</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="contact-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="contact-one__title text-center">Silahkan<br>
                    hubungi kami</h2><!-- /.contact-one__title -->
                <form action="#" class="contact-one__form">
                    <div class="row low-gutters">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your Name">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email Address">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea placeholder="Write Message"></textarea>
                            <div class="text-center">
                                <button type="submit" class="contact-one__btn thm-btn">Submit Comment</button>
                            </div><!-- /.text-center -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJfxip1i3oaC4Rz-hAAQOPSQ0" class="google-map__contact" allowfullscreen></iframe>
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.contact-one -->
<script src="<?=base_url();?>assets/js/scrollreveal.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
<script src="<?=base_url();?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url();?>assets/js/waypoints.min.js"></script>
<script src="<?=base_url();?>assets/js/jquery.counterup.min.js"></script>
<script src="<?=base_url();?>assets/js/TweenMax.min.js"></script>
<script src="<?=base_url();?>assets/js/wow.js"></script>
<script src="<?=base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url();?>assets/js/countdown.min.js"></script>
<script src="<?=base_url();?>assets/js/vegas.min.js"></script>
<!-- template scripts -->
<script src="<?=base_url();?>assets/js/theme.js">
	var ScrollReveal;
	var sr;
	window.sr = ScrollReveal({
		scale: 1,
		duration: 750,
		delay: 400,
		distance: 0,
		easing: "cubic-bezier(.4, 0, .2, 1)",
	});
	sr.reveal(".sr-btm", {
		distance: "3em",
		origin: "bottom",
	});
</script>





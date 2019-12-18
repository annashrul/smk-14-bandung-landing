<?php $url = base_url() . "assets"?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">smk14bdg@yahoo.com</a>
                    <a href="#">(022)7560358</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right col-md-12 col-md-offset-9">
                    <a class="btn btn-primary" href="<?=base_url();?>Auth" style="color:white">Masuk</a>
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="<?=base_url();?>">
                            <img src="<?=base_url();?>assets/images/logo-dark.png" class="main-logo" width="75" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="">
                                <a href="<?=base_url();?>">Beranda</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>Menu_Controller/berita">Berita</a>
                            </li>
                            <li>
                                <a href="#">Selayang Pandang</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url();?>Menu_Controller/sejarah">Sejarah</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/visi_misi">Visi & Misi</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/budaya">Budaya & Logo</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/landasan_hukum">Landaasan Hukum</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/fasilitas">Fasilitas</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Manajemen</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url();?>Menu_Controller/kepala_sekolah">Kepala Sekolah</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/kepala_tu">Kepala Tata Usaha</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/wakil_kepala">Wakil Kepala Sekolah</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/dewan">Dewan Komite</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/kajur">Kajur & Kaprog</a></li>

                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Struktur Organisasi</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url();?>Menu_Controller/bagan_struktur">Bagan Struktur</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/divisi">Divisi</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Kegiatan</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url();?>Menu_Controller/osis">OSIS</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/eskul">Ekstrakulikuler</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/pramuka">Pramuka</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Informasi</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url();?>Menu_Controller/tenaga_pen">Tenaga Pendidikan</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/prestasi">Prestasi</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/sarana">Sarana & Prasarana</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/akreditasi">Akreditasi</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/lowongan_kerja">Lowongan Kerja</a></li>


                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="#">Paket Keahlian</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=base_url();?>Menu_Controller/otomotif">Teknik Bodi Otomotif</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/multimedia">Multimedia</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/design">Design Komunikasi Visual</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/animasi">Animasi</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/tesktil">Kriya Kreatif Tekstil dan Batik</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/kulit">Kriya Kreatif Kulit dan Imitasi</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/keramik">Kriya Kreatif Keramik</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/logam">Kriya Kreatif Logam dan Perhiasan</a></li>
                                    <li><a href="<?=base_url();?>Menu_Controller/kayu">Kriya Kreatif Kayu dan Rotan</a></li>

                                   

                                </ul><!-- /.sub-menu -->
                            </li>

                            <li>
                                <a href="<?=base_url();?>Menu_Controller/perpustakaan">Pepustakaan</a>
    
                            </li>
                           <!--  <li>
                                <a href="contact.html">Contact</a>
                            </li> -->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-magnifying-glass"></i>
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->


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
    <script src="assets/js/theme.js"></script>
</body>


<!-- Mirrored from layerdrops.com/kipso/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 02:03:46 GMT -->
</html>
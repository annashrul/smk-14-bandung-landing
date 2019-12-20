<?php $url = base_url() . "assets"?>
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">smk14bdg@yahoo.com</a>
                    <a href="#">(022)7560358</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right col-md-12 col-md-offset-9">
                    <a class="btn btn-primary" href="http://localhost/perpustakaan/auth" style="color:white">Masuk</a>
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
                            <li><a href="<?=base_url();?>">Beranda</a></li>
                            <li>
                                <a href="#">Berita</a>
                                <ul class="sub-menu">
                                    <?php $read_data=$this->M_crud->read_data('tbl_category','*'); foreach ($read_data as $row) { ?>
                                        <li><a href="<?=base_url("berita?title=".$row['slug'])?>"><?=$row['title']?></a></li>
                                    <?php }?>
                                </ul>
                            </li>

                            <li>
                                <a href="#">Selayang Pandang</a>
                                <ul class="sub-menu">
                                    <?php $controller='selayang_pandang'; ?>
                                    <li><a href="<?=base_url().$controller.'?type=sejarah';?>">Sejarah</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=visi_misi';?>">Visi & Misi</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=budaya';?>">Budaya & Logo</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=landasan_hukum';?>">Landaasan Hukum</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=fasilitas';?>">Fasilitas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Manajemen</a>
                                <ul class="sub-menu">
                                    <?php $controller='manajemen'; ?>
                                    <li><a href="<?=base_url().$controller.'?type=kepala_sekolah';?>">Kepala Sekolah</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=kepala_tu';?>">Kepala Tata Usaha</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=wakil_kepala_sekolah';?>">Wakil Kepala Sekolah</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=dewan_komite';?>">Dewan Komite</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=kajur_kaprog';?>">Kajur & Kaprog</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Struktur Organisasi</a>
                                <ul class="sub-menu">
                                    <?php $controller='struktur'; ?>
                                    <li><a href="<?=base_url().$controller.'?type=bagan';?>">Bagan Struktur</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=divisi';?>">Divisi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Kegiatan</a>
                                <ul class="sub-menu">
                                    <?php $controller='kegiatan'; ?>
                                    <li><a href="<?=base_url().$controller.'?type=osis';?>">OSIS</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=eskul';?>">Ekstrakulikuler</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=pramuka';?>">Pramuka</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Informasi</a>
                                <ul class="sub-menu">
                                    <?php $controller='informasi'; ?>
                                    <li><a href="<?=base_url().$controller.'?type=tenaga_pendidik';?>">Tenaga Pendidikan</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=prestasi';?>">Prestasi</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=sarana_prasarana';?>">Sarana & Prasarana</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=akreditasi';?>">Akreditasi</a></li>
                                    <li><a href="<?=base_url().$controller.'?type=lowongan_kerja';?>">Lowongan Kerja</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Paket Keahlian</a>
                                <ul class="sub-menu">
                                    <?php foreach ($jurusan as $j) { ?>
                                    <li><a href="<?=$j['id']?>"><?=$j['title']?></a></li>
                                    <?php }?>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url();?>Menu_Controller/perpustakaan">Pepustakaan</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <style>
                        @media (max-width: 576px) {
                            .right-side-box{margin-top: 20px!important;}
                        }
                    </style>
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="fa fa-search"></i></a>
                    </div><!-- /.right-side-box
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

        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
                </form>
            </div>
        </div>


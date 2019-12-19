<?php //$this->load->view('layout/tambahan') ?>
<?php $this->load->view('layout/header') ?>

<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title text">Dewan Komite</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section>
<section class="team-one">
    <div class="container">
        <div class="row">
            <?php if($dewan_komite != null){ foreach($dewan_komite as $row): ?>
                <div class="col-lg-3">
                    <div class="team-one__single">
                        <div class="team-one__image">
                            <img src="<?=$dewan_komite['image']?>" alt="">
                        </div><!-- /.team-one__image -->
                        <div class="team-one__content">
                            <h2 class="team-one__name"><?=$dewan_komite['nama']?></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__designation"><?=$dewan_komite['image']?></p><!-- /.team-one__designation -->
                            <p class="team-one__text"><?=$dewan_komite['deskripsi']?></p>
                            <!-- /.team-one__text -->
                        </div><!-- /.team-one__content -->
                    </div><!-- /.team-one__single -->
                </div><!-- /.col-lg-3 -->
            <?php endforeach; }else{ ?>
                <div class="col-md-12">
                    <h1 class="text-center">Data Tida Ada</h1>
                </div>
            <?php } ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-one team-page -->
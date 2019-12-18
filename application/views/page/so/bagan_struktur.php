<?php $this->load->view('layout/tambahan') ?>
<?php $this->load->view('layout/header') ?>

<section class="team-details">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-12">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="<?=$struktur['image']?>" alt="" width="100%">
                    </div><!-- /.team-one__image -->
                </div><!-- /.team-one__single -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-12">
                <div class="team-details__content">
                    <h2 class="team-details__title"><?=$struktur['title']?></h2><!-- /.team-details__title -->
                    <p class="team-details__text" style="text-align:justify"><?=strip_tags($struktur['content'])?></p><!-- /.team-details__text -->
                </div><!-- /.team-details__content -->
            </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team-details -->
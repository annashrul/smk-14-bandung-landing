<?php $this->load->view('layout/tambahan') ?>
<?php $this->load->view('layout/header') ?>

<section class="team-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-one__single">
                    <div class="blog-one__image2">
                        <img src=" <?=$read_data['image']?>" alt="">

                    </div><!-- /.blog-one__image -->
                    <div class="blog-one__content">
                        <div class="blog-one__meta">
                            <a data-toggle="tooltip" data-placement="top" title="Ditulis Tanggal <?=$read_data['created_at']?>" href="#"><i class="fa fa-calendar-alt"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="Ditulis Oleh <?=$read_data['nama']?>" href="#"><i class="fa fa-user"></i></a>
                        </div><!-- /.blog-one__meta -->
                        <h2 class="blog-one__title"><?=$read_data['title']?></h2><!-- /.blog-one__title -->
                        <p><?=$read_data['content']?></p><!-- /.blog-one__text -->

                    </div><!-- /.blog-one__content -->
                </div><!-- /.blog-one__single -->


            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Informasi Terbaru</h3><!-- /.sidebar__title -->
                        <div class="sidebar__post-wrap">
                            <?php foreach($late_post as $row):?>
                            <div class="sidebar__post__single">
                                <div class="sidebar__post-image">
                                    <div class="inner-block"><img src="<?=$row['image']?>" alt="Awesome Image" /></div>
                                    <!-- /.inner-block -->
                                </div><!-- /.sidebar__post-image -->
                                <div class="sidebar__post-content">
                                    <p class="sidebar__post-title"><a style="font-size: 10px;" href="<?=base_url("detail?type=".$_GET['type']."&title=".$row['slug'])?>"><?=$row['title']?></a></p>
                                    <!-- /.sidebar__post-title -->
                                </div><!-- /.sidebar__post-content -->
                            </div><!-- /.sidebar__post__single -->
                            <?php endforeach; ?>
                        </div><!-- /.sidebar__post-wrap -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__category-list">
                            <li class="sidebar__category-list-item"><a href="#">Business</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Introductions</a></li>
                            <li class="sidebar__category-list-item"><a href="#">One Page Template</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Parallax Effects</a></li>
                            <li class="sidebar__category-list-item"><a href="#">New Technologies</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Video Backgrounds</a></li>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->

                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-details -->
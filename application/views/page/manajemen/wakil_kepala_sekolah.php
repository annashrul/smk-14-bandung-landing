<?php //$this->load->view('layout/tambahan') ?>
<?php $this->load->view('layout/header') ?>

<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title text" id="title"></h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section>
<section class="team-one">
    <div class="container">
        <div class="row" id="result_table">
            <?php if($wakil_kepala_sekolah != null){ foreach($wakil_kepala_sekolah as $row): ?>
            <div class="col-lg-3">
                <div class="team-one__single">
                    <div class="team-one__image">
                        <img src="<?=$wakil_kepala_sekolah['image']?>" alt="">
                    </div>
                    <div class="team-one__content">
                        <h2 class="team-one__name"><?=$wakil_kepala_sekolah['nama']?></h2>
                        <p class="team-one__designation"><?=$wakil_kepala_sekolah['image']?></p>
                        <p class="team-one__text"><?=$wakil_kepala_sekolah['deskripsi']?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; }else{ ?>
            <div class="col-md-12">
                <h1 class="text-center">Data Tida Ada</h1>
            </div>
            <?php } ?>
        </div><!-- /.row -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <nav aria-label="..." id="pagination_link"></nav>
        </div>
    </div><!-- /.container -->
</section><!-- /.team-one team-page -->


<script>
	$(document).ready(function(){
		load_data(1);
	}).on("click", ".pagination li a", function(event){
		event.preventDefault();
		var page = $(this).data("ci-pagination-page");
		load_data(page);
	});
	function load_data(page,data={}){
		dynamic_ajax("<?=base_url().'manajemen/load_data/wakil_kepala_sekolah/'?>"+page,null,function(res){
			$("#result_table").html(res.result);
			$("#title").html(res.title);
			$('#pagination_link').html(res.pagination_link);
		});
	}
</script>
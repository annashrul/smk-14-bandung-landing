<?php $this->load->view('layout/header') ?>

<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title text" id="title"></h2>
    </div><!-- /.container -->
</section>

<section class="course-one course-page">
    <div class="container">
        <div class="row" id="result_table">

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12"><nav aria-label="..." id="pagination_link"></nav></div>

    </div>
</section>
<script>
	var type = "<?=$_GET['title']?>";
	var img = "<?=base_url('assets/')?>";    //** url images **//
	$(document).ready(function(){
		load_data(1);
		$("#cek").html('acuy')
	}).on("click", ".pagination li a", function(event){
		event.preventDefault();
		var page = $(this).data("ci-pagination-page");
		load_data(page);
	});
	function load_data(page) {
		$.ajax({
			url       : "<?=base_url()?>berita/load_data/get_list/"+page,
			method    : "POST",
			data      : {type:type},
			dataType  : "JSON",
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
			complete  : function() {$('.first-loader').remove()},
			success   : function(data) {
				$('#result_table').html(data.result_table);
				$('#pagination_link').html(data.pagination_link);
				// $("#page").val(data.hal);
				console.log(data);
				$("#title").html("Berita")
			}
		});
	}

	function isLike(idContent){
		dynamic_ajax("<?=base_url().'berita/isLike'?>",{idContent:idContent},function(res){
			if(res.status === 'success'){
				console.log(res.msg);
				load_data(1);
				$("#love").css('color','red');
			}else{
				console.log(res.msg);
				load_data(1);
				$("#love").css('color','white');
			}
		})
	}

</script>
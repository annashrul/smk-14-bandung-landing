<?php $this->load->view('layout/tambahan') ?>
<?php $this->load->view('layout/header') ?>

<section class="blog-one blog-page">
    <div class="container">
        <div class="row" id="result_table">
        </div><!-- /.container -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <nav aria-label="..." id="pagination_link"></nav>
        </div>
</section><!-- /.blog-one blog-page -->


<script>
	var img = "<?=base_url('assets/')?>";    //** url images **//
	$(document).ready(function(){
		load_data(1);
	}).on("click", ".pagination li a", function(event){
		event.preventDefault();
		var page = $(this).data("ci-pagination-page");
		load_data(page);
	});
	function load_data(page,data={}) {
		$.ajax({
			url       : "<?=base_url()?>menu_controller/berita/get/"+page,
			method    : "POST",
			data      : data,
			dataType  : "JSON",
			beforeSend: function() {$('body').append('<div class="first-loader"><img src="'+img+'spin.svg"></div>')},
			complete  : function() {$('.first-loader').remove()},
			success   : function(data) {
				$('#result_table').html(data.result_table);
				$('#pagination_link').html(data.pagination_link);
				// $("#page").val(data.hal);
				console.log(data);
			}
		});
	}

</script>
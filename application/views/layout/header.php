<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/kipso/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 02:02:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 14 BANDUNG</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url();?>assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/img/icon.png">
    <link rel="manifest" href="<?=base_url();?>assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css">
    <!-- Animation Scroll -->

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
    <script src="<?=base_url();?>assets/js/theme.js"></script>
    <script src="<?=base_url();?>assets/js/scrollreveal.min.js"></script>
</head>
<style>
    .first-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1050;
        background: rgba(168, 168, 168, .5)
    }
    .first-loader img {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px
    }
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: #1e88e5;
        /*border-radius: 10px;*/
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #1e88e5;
        z-index: 1050;
        /*border-radius: 10px;*/
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #1e88e5;
    }
    .pagination > li > a {
        padding: 6px 12px;
        color: #000000;
        font-size: 16px;
        font-weight: bold;
        background-color: #ffffff;
        border: 1px solid #dddddd;
        margin: 0 3px;
    }
    .pagination > .active > a {
        color: #000000;
        font-weight: bold;
        background-color: #ffffff;
        border: 1px solid #dddddd;
    }
    .pagination > li:first-child > a {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
    }
    .pagination > li:last-child > a {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
    }
    .pagination > li > a:hover,
    .pagination > li > a:focus {
        color: #ffffff;
        background-color: #0073b7 !important;
        border-color: #0073b7 !important;
    }
    .pagination > .active > a,
    .pagination > .active > a:hover,
    .pagination > .active > a:focus {
        color: #ffffff;
        background-color: #0073b7 !important;
        border-color: #0073b7 !important;
        z-index: -0!important;
    }
    .pagination > .disabled > a,
    .pagination > .disabled > a:hover,
    .pagination > .disabled > a:focus {
        color: #777777;
        background-color: #ffffff;
        border-color: #dddddd;

    }
</style>
<script>
	var img_loader = '<img src="<?=base_url().'assets/'?>spin.svg">';
	function dynamic_ajax(url,req=null,func_req){
		$.ajax({
			url : url,
			type:"POST",
			dataType : "JSON",
			data:req?req:null,
			success:func_req,
			beforeSend: function() {$('body').append('<div class="first-loader">'+img_loader+'</div>')},
			complete: function() {$('.first-loader').remove()},
		});
		return;
	}
</script>
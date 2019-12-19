<?php
$jurusan = $this->M_crud->read_data("tbl_jurusan","*");
include 'header.php';
include 'navbar.php';
// include 'tambahan.php';
include "sidebar.php";
include "content.php";
include "footer.php";
 ?>
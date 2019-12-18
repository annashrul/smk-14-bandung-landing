<?php
$jurusan = $this->m_crud->read_data("tbl_jurusan","*");
include 'header.php';
include 'navbar.php';
// include 'tambahan.php';
include "sidebar.php";
include "content.php";
include "footer.php";
 ?>
<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo"><?=$site?></a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="<?=assets('bo/images/avatar-sm-5.jpg')?>" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html"><?=$this->session->nama?></a></h5>
			<h5 class="position"><?=$this->session->level?></h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
				</div>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<?php $akses = $this->session->access_level?>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<h5 class="title">Navigation</h5>
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="<?=urls('')?>"><i class="menu-icon fa fa-dashboard"></i><span>Dashboard</span></a>
                </li>
                <li>
					<a class="waves-effect" href="<?=urls('berita')?>"><i class="menu-icon fa fa-newspaper-o"></i><span>Berita</span></a>
                </li>
				<li>
					<a class="waves-effect" href="<?=urls('lowongan')?>"><i class="menu-icon fa fa-newspaper-o"></i><span>Lowongan</span></a>
                </li>
				<li>
					<a class="waves-effect" href="<?=urls('manajemen')?>"><i class="menu-icon fa fa-newspaper-o"></i><span>Manajemen</span></a>
                </li>
				<!-- <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-file-o"></i><span>Master Data</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="ui-buttons.html">Buttons</a></li>
					</ul>
                </li> -->
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-users"></i><span>Manajemen User</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="ui-buttons.html">User List</a></li>
						<li><a href="ui-buttons.html">User Level</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
                </li>
                <li>
					<a class="waves-effect" href="index.html"><i class="menu-icon fa fa-gear"></i><span>Setting</span></a>
                </li>
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
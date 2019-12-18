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
				<li  <?=$this->uri->segment('2')==''?'class="current active"':''?>>
					<a class="waves-effect" href="<?=urls('')?>"><i class="menu-icon fa fa-dashboard"></i><span>Dashboard</span></a>
                </li>
				<li 
				<?=
				$this->uri->segment('2')=='berita' ||
				$this->uri->segment('2')=='lowongan' ||
				$this->uri->segment('2')=='manajemen' ||
				$this->uri->segment('2')=='informasi'?'class="current active"':''?>
				>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-film"></i><span>Master Konten</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li>
							<a class="waves-effect <?=$this->uri->segment('2')=='berita'?'active':''?>" href="<?=urls('berita')?>"><span>Berita</span></a>
						</li>
						<li>
							<a class="waves-effect <?=$this->uri->segment('2')=='lowongan'?'active':''?>" href="<?=urls('lowongan')?>"><span>Lowongan</span></a>
						</li>
						<li>
							<a class="waves-effect <?=$this->uri->segment('2')=='manajemen'?'active':''?>" href="<?=urls('manajemen')?>"><span>Manajemen</span></a>
						</li>
						
						<li>
							<a class="waves-effect <?=$this->uri->segment('2')=='informasi'?'active':''?>" href="<?=urls('informasi')?>"><span>informasi</span></a>
						</li>
					</ul>
                </li>
				<li
				<?=
				$this->uri->segment('2')=='guru' ||
				$this->uri->segment('2')=='jurusan' ||
				$this->uri->segment('2')=='kelas' ||
				$this->uri->segment('2')=='siswa'?'class="current active"':''?>
				>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-file-o"></i><span>Master Data</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a class="waves-effect <?=$this->uri->segment('2')=='guru'?'active':''?>" href="<?=urls('guru')?>"><span>Guru</span></a></li>
						<li><a class="waves-effect <?=$this->uri->segment('2')=='jurusan'?'active':''?>" href="<?=urls('jurusan')?>"><span>Jurusan</span></a></li>
						<li><a class="waves-effect <?=$this->uri->segment('2')=='kelas'?'active':''?>" href="<?=urls('kelas')?>"><span>Kelas</span></a></li>
						<li><a class="waves-effect <?=$this->uri->segment('2')=='siswa'?'active':''?>" href="<?=urls('siswa')?>"><span>Siswa</span></a></li>
					</ul>
                </li>
                <li
					<?=
					$this->uri->segment('2')=='user' ||
					$this->uri->segment('2')=='userlevel'?'class="current active"':''?>
				>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-users"></i><span>Manajemen User</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a class="waves-effect <?=$this->uri->segment('2')=='user'?'active':''?>" href="<?=urls('user')?>"><span>User List</span></a></li>
						<li><a class="waves-effect <?=$this->uri->segment('2')=='userlevel'?'active':''?>" href="<?=urls('userlevel')?>"><span>User Level</span></a></li>
					</ul>
					<!-- /.sub-menu js__content -->
                </li>
                <li  <?=$this->uri->segment('2')=='setting'?'class="current active"':''?>>
					<a class="waves-effect" href="<?=urls('setting')?>"><i class="menu-icon fa fa-gear"></i><span>Setting</span></a>
                </li>
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
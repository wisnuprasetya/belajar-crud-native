<?php
function link_sidebar($link){
	return str_replace('=', '', base64_encode($link));
}

$menu_sidebar = !empty($_GET['page']) ? base64_decode($_GET['page']) : 'dashboard';
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $_SESSION['login_app']['nama'] ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="?page=<?= link_sidebar('dashboard') ?>" class="nav-link <?= $menu_sidebar == '' || $menu_sidebar == 'dashboard' ? 'active' : '' ?>">
						<i class="nav-icon fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="?page=<?= link_sidebar('user') ?>" class="nav-link <?= $menu_sidebar == 'user' ? 'active' : '' ?>">
						<i class="nav-icon fas fa-user"></i>
						<p>User</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
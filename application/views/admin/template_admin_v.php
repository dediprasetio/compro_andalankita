<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('admin/template/head_v') ?>
<!-- Head -->

<body>

	<!-- Main navbar -->
	<?php $this->load->view('admin/template/navbar_v') ?>
	<!-- /main navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<?php
						if(!empty($breadcrumb)){
							echo $breadcrumb;
						}
					?>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="#" class="breadcrumb-elements-item text-secondary">
						<b>Selamat datang kembali <?= $this->session->userdata(SHORT_APP_NAME.'_'.'username') ?></b>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Main sidebar</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				<div class="card card-sidebar-mobile">

					<!-- Header -->
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Navigasi Halaman</h6>
						<hr>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="card-body">
							<div class="media">
								<div class="mr-3 image-profile">
									<a href="#"><img src="<?= base_url() ?>public/cms/images/profile/<?= $this->session->userdata(SHORT_APP_NAME.'_'.'photo') ?>" width="38" height="38" class="rounded-circle" alt=""></a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold"><?= $this->session->userdata(SHORT_APP_NAME.'_'.'username') ?></div>
									<div class="font-size-xs opacity-50">
										<!-- <i class="icon-pin font-size-sm"></i>&nbsp; -->
										<?= $this->session->userdata(SHORT_APP_NAME.'_'.'email') ?>
									</div>
								</div>

								<div class="ml-3 align-self-center">
									<a href="#" class="text-white"><i class="icon-cog3"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<!-- navbar -->
							<?php $this->load->view('admin/template/sidebar_v') ?>
							<!-- navbar -->
						</ul>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<?php
					if(!empty($content)){
						$this->load->view($content);
					}
				?>

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	<!-- Additional Change Photo Modal -->
	<?php
		$this->load->view('global/modal_change_photo_v');
	?>
	
	<!-- Additional Change Password Modal -->
	<?php
		$this->load->view('global/modal_change_password_v');
	?>


	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center w-100 p-2">
				&copy; 2022. Property Agent. All rights reserved by <a href="https://www.linkedin.com/in/dedi-prasetio-518735175/" target="_blank">Prasetio</a>
		</div>
	</div>
	<!-- /footer -->

</body>

</html>
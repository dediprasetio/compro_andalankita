<style>
	.gradient-text {
		background: linear-gradient(90deg, #696eff, #f8acff);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		background-clip: text;
		color: transparent;
	}
</style>
<div class="navbar navbar-expand-md navbar-dark">
	<div class="navbar-brand">
		<a href="<?= base_url('admin') ?>" class="d-inline-block">
			<div class="row">
				<div class="col-2">
					<img src="<?= base_url() ?>public/global-images/cms.png" style="height: 35px;" alt="">
				</div>
				<div class="col-10" style="margin-top: -5px;">
					<h3 class="text-uppercase font-weight-bold text-white gradient-text">Content Management</h3>
					<h6 class="text-black">Andalalinkita.com</h6>
				</div>
			</div>
		</a>
	</div>

	<div class="d-md-none">
		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
			<i class="icon-tree5"></i>
		</button> -->
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
			<i class="icon-paragraph-justify3"></i>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="navbar-mobile">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none">
					<i class="icon-paragraph-justify3"></i>
				</a>
			</li>
			<li class="nav-item text-secondary d-none">
			<i class="icon-feed mr-2"></i>10 Januari 2022 20:20:20 |  Terakhir Masuk : 7 hari yang lalu | Tingkat Penanggungjawab : Administrator
			</li>
		</ul>

		<span class="badge bg-success-400 ml-md-auto mr-md-3">Active</span>

		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
					<i class="icon-puzzle3"></i>
					<span class="d-md-none ml-2">Agenda</span>
					<span class="badge badge-pill badge-mark bg-orange-400 border-orange-400 ml-auto ml-md-0"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
					<div class="dropdown-content-header">
						<span class="font-weight-semibold">Daftar Agenda</span>
						<small><?= $data['total_event']->total_event ?> Agenda</small>
					</div>

					<div class="dropdown-content-body dropdown-scrollable">
						<ul class="media-list">
						<?php
                        foreach($data['events'] as $row){
                            echo '<li class="media">
								<div class="media-body">
									<div class="media-title">
										<a href="#">
											<span class="font-weight-semibold">'.$row['title'].'</span>
											<!-- <span class="text-muted float-right font-size-sm">Rumah</span> -->
										</a>
									</div>
								</div>
							</li>';
                        }
                    ?>
						</ul>
					</div>

					<div class="dropdown-content-footer justify-content-center p-0">
						<a href="<?= base_url() ?>admin/event" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Tampilkan Lebih Banyak"><i class="icon-menu7 d-block top-0"></i></a>
					</div>
				</div>
			</li>

			<li class="nav-item dropdown dropdown-user">
				<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
					<div class="image-profile mr-1">
						<img src="<?= base_url() ?>public/cms/images/profile/<?= $this->session->userdata(SHORT_APP_NAME.'_'.'photo') ?>" class="rounded-circle mr-2" height="34" width="34" alt="">
					</div>
					<span><?= $this->session->userdata(SHORT_APP_NAME.'_'.'username') ?></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right">
					<a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modal-change-photo"><i class="icon-shutter"></i> Change Photo</a>
					<a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modal-change-password"><i class="icon-lock2"></i> Change Password</a>
					<div class="dropdown-divider"></div>
					<a href="<?= base_url() ?>admin/auth/logout" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
				</div>
			</li>
		</ul>
	</div>
</div>
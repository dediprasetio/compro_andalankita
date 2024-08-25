<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/about" type="button" class="btn bg-teal-700 btn-block btn-float">
                            <i class="icon-office icon-2x"></i>
                            <span>Tentang Perusahaan</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/vision_mission" type="button"
                            class="btn bg-purple-300 btn-block btn-float">
                            <i class="icon-make-group icon-2x"></i>
                            <span>Visi & Misi</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/organization" type="button"
                            class="btn bg-warning-400 btn-block btn-float">
                            <i class="icon-lan2 icon-2x"></i>
                            <span>Struktur Organisasi</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/history" type="button"
                            class="btn bg-pink-400 btn-block btn-float">
                            <i class="icon-city icon-2x"></i>
                            <span>Sejarah</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/event" type="button" class="btn bg-blue-700 btn-block btn-float">
                            <i class="icon-folder-plus2 icon-2x"></i>
                            <span>Agenda</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/advertisement" type="button" class="btn bg-brown-600 btn-block btn-float">
                            <i class="icon-ticket icon-2x"></i>
                            <span>Agenda</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/company" type="button"
                            class="btn bg-indigo-400 btn-block btn-float">
                            <i class="icon-clipboard2 icon-2x"></i>
                            <span>Informasi</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/user" type="button" class="btn bg-slate-400 btn-block btn-float">
                            <i class="icon-people icon-2x"></i>
                            <span>Pengguna</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 mt-1 mb-1">
                        <a href="<?= base_url() ?>admin/auth/logout" type="button"
                            class="btn bg-teal-400 btn-block btn-float">
                            <i class="icon-exit2 icon-2x"></i>
                            <span>Keluar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <div class="media align-items-center align-items-md-start flex-column flex-md-row">
                <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
                    <i class="icon-office text-success-400 border-success-400 border-3 rounded-round p-2"></i>
                </a>

                <div class="media-body text-center text-md-left">
                    <h6 class="media-title font-weight-semibold">
                        Halaman profile perusahaan
                    </h6>
                    Untuk melihat tampilan depan, kunjungi website profile perusahaan anda disini.
                </div>

                <a href="<?= base_url() ?>" class="btn bg-success" target="_blank"><i
                        class="icon-link2"></i> &nbsp; Kunjungi
                </a>
            </div>
        </div>

        <!-- Support tickets -->
        <div class="card">
            <div class="card-header header-elements-sm-inline">
                <h6 class="card-title text-teal font-weight-bold">Daftar Pengguna</h6>
                <div class="header-elements">
                    <a class="text-default dropdown-toggle">
                        <i class="icon-calendar3 mr-2"></i>
                        <?=date('Y M d H:m:s') ?>
                    </a>
                </div>
            </div>
            <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 50px">No</th>
                                <th style="width: 300px;">Nama Lengkap</th>
                                <th>Penghubung</th>
                                <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($data['admin'] as $row) {
                                echo '<tr>
                                <td class="text-center">
                                    <i class="icon-checkmark3 text-success"></i>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3">
                                            <a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-sm">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">' . $row['user_full_name'] . '</a>
                                            <div class="text-muted font-size-sm"><span class="badge badge-mark border-blue mr-1"></span>' . ucfirst($row['status']) . '</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-default">
                                        <div class="font-weight-semibold">' . $row['user_phone_number'] . '</div>
                                        <span class="text-muted">E-mail : ' . $row['user_email'] . '</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="list-icons-item dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr class="mt-2">
                <a href="<?= base_url() ?>admin/user" class="bg-light text-grey w-100 py-2 border-top"
                    data-popup="tooltip" title="Tampilkan lebih banyak"><i class="icon-menu7 d-block top-0"></i></a>
            </div>
        </div>
        <!-- /support tickets -->
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <!-- Progress counters -->
        <div class="row d-none">
            <div class="col-sm-6">

                <!-- Available hours -->
                <div class="card text-center">
                    <div class="card-body">
                        <div class="svg-center position-relative" id="hours-available-progress"></div>
                        <!-- /progress counter -->


                        <!-- Bars -->
                        <div id="hours-available-bars"></div>
                        <!-- /bars -->

                    </div>
                </div>
                <!-- /available hours -->

            </div>

            <div class="col-sm-6">

                <!-- Productivity goal -->
                <div class="card text-center">
                    <div class="card-body">

                        <!-- Progress counter -->
                        <div class="svg-center position-relative" id="goal-progress"></div>
                        <!-- /progress counter -->

                        <!-- Bars -->
                        <div id="goal-bars"></div>
                        <!-- /bars -->

                    </div>
                </div>
                <!-- /productivity goal -->

            </div>
        </div>
        <!-- /progress counters -->
        <!-- My messages -->
        <!-- <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title text-teal"><b>Kategori Layanan Terbanyak</b></h5>
                <div class="header-elements">
                    <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                </div>
            </div>

            <div class="card-body py-0">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="font-weight-semibold mb-0">2,345</h5>
                            <span class="text-muted font-size-sm">Rumah</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="font-weight-semibold mb-0">3,568</h5>
                            <span class="text-muted font-size-sm">Apartmen</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <h5 class="font-weight-semibold mb-0">32,693</h5>
                            <span class="text-muted font-size-sm">Ruko</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Daily financials -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title text-teal"><b>Daftar Agenda</b></h5>
                <div class="header-elements">
                    <div
                        class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
                        <label class="form-check-label">
                            <!-- <input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc> -->

                        </label>
                    </div>
                    <span class="badge bg-info-400 badge-pill">
                        <?= $data['total_event']->total_event ?>
                    </span>
                </div>
            </div>

            <div class="card-body">
                <div class="chart mb-3" id="bullets"></div>

                <ul class="media-list">
                    <?php
                    foreach ($data['events'] as $row) {
                        echo '<li class="media">
                            <div class="mr-3">
                                <a href="#" class="btn bg-transparent border-info border-2 btn-icon"><img src="' . base_url() . 'public/global-images/events/' . $row['photo'] . '" style="width: 3rem;" alt=""></i></a>
                            </div>
    
                            <div class="media-body">
                                <h5 class="font-weight-bold text-info">' . $row['title'] . '</h5>
                                <div class="text-muted">' . substr($row['short_description'], 0, 65) . '...</div>
                            </div>
                        </li>';
                    }
                    ?>
                </ul>

                <hr>
                <a href="<?= base_url() ?>admin/event" class="bg-light text-grey w-100 py-2" data-popup="tooltip"
                    title="Tampilkan lebih banyak"><i class="icon-menu7 d-block top-0"></i></a>
            </div>
        </div>
        <!-- /daily financials -->
    </div>
</div>
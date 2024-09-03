    <!-- Main -->
    <li class="nav-item-header mt-0">
        <div class="text-uppercase font-size-xs line-height-xs">Menu Utama</div> <i class="icon-menu" title="Main"></i>
    </li>
    <li class="nav-item">
        <a href="<?= base_url() ?>admin" class="nav-link">
            <i class="icon-home2"></i>
            <span>
                Dashboard
                <span class="d-block font-weight-normal opacity-50">Halaman Rumah</span>
            </span>
        </a>
    </li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/about" class="nav-link"><i class="icon-city icon"></i>Tentang Perusahaan</a></li> 
    <!-- <li class="nav-item"><a href="<?= base_url() ?>admin/vision_mission" class="nav-link"><i class="icon-price-tags2 icon"></i>Visi dan Misi</a></li>  -->
    <li class="nav-item"><a href="<?= base_url() ?>admin/vision" class="nav-link"><i class="icon-align-left icon"></i>Visi</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/mission" class="nav-link"><i class="icon-align-right icon"></i>Misi</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/keyfactors" class="nav-link"><i class="icon-lock2 icon"></i>Key Factors</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/problemsolution" class="nav-link"><i class="icon-file-check2 icon"></i>Problem & Solution</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/business_plan" class="nav-link"><i class="icon-stack3 icon"></i>Bisnis Plan</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/organization" class="nav-link"><i class="icon-users4 icon"></i>Struktur Organisasi</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/history" class="nav-link"><i class="icon-atom2 icon"></i>Sejarah</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/news" class="nav-link"><i class="icon-puzzle3 icon"></i>News</a></li> 
    <!-- <li class="nav-item"><a href="<?= base_url() ?>admin/event" class="nav-link"><i class="icon-puzzle3 icon"></i>Agenda</a></li>  -->
    <li class="nav-item"><a href="<?= base_url() ?>admin/advertisement" class="nav-link"><i class="icon-ticket icon"></i>Iklan Perusahaan</a></li> 
    <!-- <li class="nav-item"><a href="<?= base_url() ?>admin/service" class="nav-link"><i class="icon-wall icon"></i>Transaksi & Layanan</a></li> 
    <li class="nav-item"><a href="<?= base_url() ?>admin/property" class="nav-link"><i class="icon-office"></i>Manajemen Properti</a></li>  
    <li class="nav-item"><a href="<?= base_url() ?>admin/report" class="nav-link"><i class="icon-file-presentation2 icon"></i> Laporan </a></li>   -->

    <!-- Tambahan -->
    <li class="nav-item-header mt-0">
        <div class="text-uppercase font-size-xs line-height-xs">Tambahan</div> <i class="icon-menu" title="Main"></i>
    </li>
    <li class="nav-item nav-item-submenu">
        <a href="#" class="nav-link"><i class="icon-grid icon"></i> <span>Master</span></a>
        <ul class="nav nav-group-sub" data-submenu-title="Themes">
            <!-- <li class="nav-item"><a href="<?= base_url() ?>admin/city" class="nav-link">Kota</a></li>
            <li class="nav-item"><a href="<?= base_url()?>admin/area" class="nav-link">Wilayah</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>admin/asset-category" class="nav-link">Jenis Properti</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>admin/owner" class="nav-link">Pemilik Properti</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>admin/employee" class="nav-link">Karyawan</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>master/material-category" class="nav-link disabled">Segera Hadir<span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li> -->
        </ul>
    </li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/company" class="nav-link"><i class="icon-office"></i>Informasi Perusahaan</a></li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/user" class="nav-link"><i class="icon-people"></i>Pengguna</a></li>

    <!-- Akses Pengguna -->
    <li class="nav-item-header mt-0">
        <div class="text-uppercase font-size-xs line-height-xs">Akses Pengguna</div> <i class="icon-menu" title="Main"></i>
    </li>
    <li class="nav-item"><a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#modal-change-photo"><i class="icon-shutter"></i>Ubah Foto</a></li>
    <li class="nav-item"><a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#modal-change-password"><i class="icon-lock"></i>Ubah Password</a></li>
    <li class="nav-item"><a href="<?= base_url() ?>admin/auth/logout" class="nav-link"><i class="icon-exit3"></i> <span>Keluar</span></a></li>

    <li class="nav-item"><a href="" class="nav-link disabled"><span>Ubah password secara berkala untuk meningkatkan keamanan.</span></a></li>
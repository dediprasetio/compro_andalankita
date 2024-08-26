<div class="container-fluid position-relative p-0">
    <div class="container-fluid position-relative">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <!-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1> -->
                <div class="d-flex justify-content-center">
                    <div class="logo me-5 pt-2">
                        <img src="<?= base_url() ?>public/front-end-andalalinkita/img/logo1.png" alt="">
                    </div>
                    <div class="powered ms-3 pt-3">
                        Powered By
                        <p class="text-capitalize">PT. Prima <span class="color-orange">Senja</span> Perkasa</p>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>history" class="dropdown-item">Sejarah</a>
                            <a href="<?= base_url() ?>vission-mission" class="dropdown-item">Visi & Misi</a>
                            <a href="<?= base_url() ?>key-factors" class="dropdown-item">Key Factors</a>
                            <a href="<?= base_url() ?>problem-solution" class="dropdown-item">Problems & Solutions</a>
                        </div>
                    </div>
                    <a href="<?= base_url() ?>product" class="nav-item nav-link">Produk</a>
                    <a href="<?= base_url() ?>service" class="nav-item nav-link">Services</a>
                    <a href="<?= base_url() ?>porto" class="nav-item nav-link">Portofolio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">News</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="<?= base_url() ?>projectstatus" class="nav-item nav-link">Project Status</a>
                    <a href="<?= base_url() ?>team" class="nav-item nav-link">Be Our Team</a>
                    <a href="contact" class="nav-item nav-link">Contact Us</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="" class="btn-orange py-2 px-4 ms-3">Register or Login</a>
            </div>
        </nav>
    </div>
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn"><?= $data['page_data']->page_title ?></h1>
                <?= $breadcrumb ?>
            </div>
        </div>
    </div>

</div>

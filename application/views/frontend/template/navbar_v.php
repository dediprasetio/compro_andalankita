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
                    <a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url() ?>history" class="dropdown-item">Sejarah</a>
                            <a href="<?= base_url() ?>vission-mission" class="dropdown-item">Visi & Misi</a>
                            <a href="<?= base_url() ?>key-factors" class="dropdown-item">Key Factors</a>
                            <a href="<?= base_url() ?>problem-solution" class="dropdown-item">Problems & Solutions</a>
                            <a href="<?= base_url() ?>contact-us" class="dropdown-item">Contact Us</a>
                        </div>
                    </div>
                    <!-- <a href="<?= base_url() ?>product" class="nav-item nav-link">Produk (coming soon)</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <!-- <a href="<?= base_url() ?>history" class="dropdown-item">Sejarah</a> -->
                            <?php if (!empty($global_page_services)): ?>
                                <?php foreach ($global_page_services as $page): ?>
                                    <?php echo '<a href="'.base_url().'pages/index/'.$page->page_code.'" class="dropdown-item">'.$page->page_title.'</a>' ?>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No services pages found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="<?= base_url() ?>pages/index/porto" class="nav-item nav-link">Portofolio</a>
                    <a href="<?= base_url() ?>news" class="nav-item nav-link">News</a>
                    <a href="<?= base_url() ?>projectstatus" class="nav-item nav-link">Project Status</a>
                    <a href="<?= base_url() ?>pages/index/ourteam" class="nav-item nav-link">Be Our Team</a>
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

<!-- Problems Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Problems</h5>
                    <h1 class="mb-0">Permasalahan yang sering terjadi</h1>
                </div>
                <?= $data['page_data_problem']->page_content ?>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?= base_url() ?>public/global-images/pages/<?= $data['page_data_problem']->photo ?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Problems End -->

<!-- Solution Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            
        <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?= base_url() ?>public/global-images/pages/<?= $data['page_data_solution']->photo ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Solution</h5>
                    <h1 class="mb-0">Solusi yang kami tawarkan</h1>
                </div>
                <?= $data['page_data_solution']->page_content ?>
            </div>
        </div>
    </div>
</div>
<!-- Solution End -->
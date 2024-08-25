<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><?= $data['history']->page_title ?></h1>
        <span><?= $data['history']->short_description ?></span>
      </div>
    </div>
  </div>
</div>
<div class="more-info about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Koperasi Jasa Angkutan</span>
                <h2>Koperasi Trayek <em>Karanganyarjaya</em></h2>
                <br>
                <?= $data['history']->page_content ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-image">
                <img src="<?= base_url() ?>public/global-images/pages/<?= $data['history']->photo ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .pagination-container {
    margin: 100px auto;
    text-align: center;
  }

  .pagination {
    position: relative;
  }

  .pagination a {
    position: relative;
    display: inline-block;
    color: #2c3e50;
    text-decoration: none;
    font-size: 1.2rem;
    padding: 8px 16px 10px;
  }

  .pagination a:before {
    z-index: -1;
    position: absolute;
    height: 100%;
    width: 100%;
    content: "";
    top: 0;
    left: 0;
    background-color: #a4c639;
    border-radius: 24px;
    transform: scale(0);
    transition: all 0.2s;
  }

  .pagination a:hover,
  .pagination a .pagination-active {
    color: #fff;
  }

  .pagination a:hover:before,
  .pagination a .pagination-active:before {
    transform: scale(1);
  }

  .pagination .pagination-active {
    color: #fff;
  }

  .pagination .pagination-active:before {
    transform: scale(1);
  }

  .pagination-newer {
    margin-right: 50px;
  }

  .pagination-older {
    margin-left: 50px;
  }
</style>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Agenda</h1>
        <span>Agenda Kami</span>
      </div>
    </div>
  </div>
</div>

<div class="team mb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="team-item">
          <img src="<?= base_url() ?>public/global-images/events/1.jpg" alt="" height="200">
          <div class="down-content">
            <h4>Koperasi BMI Group</h4>
            <span>Rabu, 20 April 2023</span>
            <p>In sem sem, dapibus non lacus auctor, ornare... <a href="#" class="">Lihat Detail</a></p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="<?= base_url() ?>public/global-images/events/2.jpeg" alt="" height="200">
          <div class="down-content">
            <h4>Rapat Koperasi BMI Group</h4>
            <span>Rabu, 20 April 2023</span>
            <p>In sem sem, dapibus non lacus auctor, ornare...</p>
            <a href="#" class="filled-button">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="" height="200">
          <div class="down-content">
            <h4>Penyampaian Koperasi BMI Group</h4>
            <span>Rabu, 20 April 2023</span>
            <p>In sem sem, dapibus non lacus auctor, ornare...</p>
            <a href="#" class="filled-button">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="">
          <div class="down-content">
            <h4>Penyampaian Koperasi BMI Group</h4>
            <span>Rabu, 20 April 2023</span>
            <p>In sem sem, dapibus non lacus auctor, ornare...</p>
            <a href="#" class="filled-button">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="">
          <div class="down-content">
            <h4>Penyampaian Koperasi BMI Group</h4>
            <span>Rabu, 20 April 2023</span>
            <p>In sem sem, dapibus non lacus auctor, ornare...</p>
            <a href="#" class="filled-button">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-item">
          <img src="<?= base_url() ?>public/global-images/events/3.jpeg" alt="">
          <div class="down-content">
            <h4>Penyampaian Koperasi BMI Group</h4>
            <span>Rabu, 20 April 2023</span>
            <p>In sem sem, dapibus non lacus auctor, ornare...</p>
            <a href="#" class="filled-button">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container d-flex justify-content-between">
  <nav class="pagination-container">
    <div class="pagination">
      <a class="pagination-newer" href="<?= base_url() ?>agenda">PREV</a>
      <span class="pagination-inner">
        <a href="#">1</a>
        <a class="pagination-active" href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
      </span>
      <a class="pagination-older" href="#">NEXT</a>
    </div>
  </nav>
</div>
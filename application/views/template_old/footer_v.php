<div class="container">
  <div class="row">
    <div class="col-md-3 footer-item last-item">
    <img src="<?= base_url() ?>public/front-end/assets/images/logo.png" class="d-none d-md-inline mr-2" width="210px" alt="">
    </div>
    <div class="col-md-6 footer-item">
      <h4>Koperasi Karanganyar Jaya</h4>
      <p>Hadir untuk membantu meningkatkan taraf hidup masyarakat dengan mengutamakan persatuan dan bertujuan untuk
        mensejahterakan anggota.</p>
      <ul class="social-icons">
            <li><a href="<?= $data['my_company']->url_facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?= $data['my_company']->url_twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?= $data['my_company']->url_youtube ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="<?= $data['my_company']->url_instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
    <!-- <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div> -->
    <div class="col-md-3 footer-item">
      <h4>Halaman Utama</h4>
      <ul class="menu-list">
        <li><a href="<?= base_url() ?>about">Tentang</a></li>
        <li><a href="<?= base_url() ?>vision_mission">Visi & Misi</a></li>
        <li><a href="<?= base_url() ?>history">Sejarah</a></li>
        <li><a href="<?= base_url() ?>organization">Organisasi</a></li>
        <li><a href="<?= base_url() ?>contact_us">Hubungi Kami</a></li>
      </ul>
    </div>
    <!-- <div class="col-md-3 footer-item last-item">
      <h4>Hubgungi Kami</h4>
      <div class="contact-form">
        <form id="contact footer-contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required="">
              </fieldset>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <fieldset>
                <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                  placeholder="Alamat E-Mail" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Pesan anda"
                  required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="filled-button">Kirim Pesan</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div> -->
  </div>
</div>
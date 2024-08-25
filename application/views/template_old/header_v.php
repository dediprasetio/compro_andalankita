<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <h2>
        <img src="<?= base_url() ?>public/front-end/assets/images/logo.png" class="d-none d-md-inline mr-2" width="75px" alt="">
        <span class="ml-10">KARANGANYAR JAYA</span>
      </h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= $active_menu == 'home' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url() ?>home">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item <?= $active_menu == 'about' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url() ?>about">Tentang</a>
        </li>
        <li class="nav-item <?= $active_menu == 'vision_mission' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url() ?>vision-mission">Visi & Misi</a>
        </li>
        <li class="nav-item <?= $active_menu == 'history' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url() ?>history">Sejarah</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>organization">Organisasi</a>
        </li> -->
        <li class="nav-item <?= $active_menu == 'agenda' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url() ?>agenda">Agenda</a>
        </li>
        <li class="nav-item <?= $active_menu == 'contact_us' ? 'active' : '' ?>">
          <a class="nav-link" href="<?= base_url() ?>contact-us">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
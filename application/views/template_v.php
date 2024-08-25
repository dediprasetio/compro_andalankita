<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $this->load->view('template/head_v');
  ?>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-xs-12">
          <ul class="left-info">
            <li><a href="#"><i class="fa fa-clock-o"></i><?= date('d F Y h:i', time()) ?></a></li>
            <li><a href="#"><i class="fa fa-phone"></i><?= $data['my_company']->phone_number ?></a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="right-icons">
            <li><a href="<?= $data['my_company']->url_facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?= $data['my_company']->url_twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?= $data['my_company']->url_youtube ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="<?= $data['my_company']->url_instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header class="">
    <?php
    $this->load->view('template/header_v');
    ?>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->

  <?php
  !empty($content) ? $this->load->view($content) : ''
    ?>

  <!-- Footer Starts Here -->
  <footer>
    <?php
    $this->load->view('template/footer_v');
    ?>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; 2023 Koperasi Karanganyar Jaya</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>public/front-end/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/front-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="<?= base_url() ?>public/front-end/assets/js/custom.js"></script>
  <script src="<?= base_url() ?>public/front-end/assets/js/owl.js"></script>
  <script src="<?= base_url() ?>public/front-end/assets/js/slick.js"></script>
  <script src="<?= base_url() ?>public/front-end/assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>
  <script>
    $('.pagination-inner a').on('click', function () {
      $(this).siblings().removeClass('pagination-active');
      $(this).addClass('pagination-active');
    })
  </script>

</body>

</html>
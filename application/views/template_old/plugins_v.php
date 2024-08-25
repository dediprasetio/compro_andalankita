<!-- jQuery-V1.12.4 -->
<script src="<?= base_url() ?>public/front-web/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper js -->
<script src="<?= base_url() ?>public/front-web/js/vendor/popper.min.js"></script>
<!-- Bootstrap V4.1.3 Fremwork js -->
<script src="<?= base_url() ?>public/front-web/js/bootstrap.min.js"></script>
<!-- Validation -->
<script src="<?= base_url() ?>public/plugins/forms/validation/validate.min.js"></script>
<!-- Ajax Mail js -->
<script src="<?= base_url() ?>public/front-web/js/ajax-mail.js"></script>
<!-- Meanmenu js -->
<script src="<?= base_url() ?>public/front-web/js/jquery.meanmenu.min.js"></script>
<!-- Wow.min js -->
<script src="<?= base_url() ?>public/front-web/js/wow.min.js"></script>
<!-- Slick Carousel js -->
<script src="<?= base_url() ?>public/front-web/js/slick.min.js"></script>
<!-- Owl Carousel-2 js -->
<script src="<?= base_url() ?>public/front-web/js/owl.carousel.min.js"></script>
<!-- Magnific popup js -->
<script src="<?= base_url() ?>public/front-web/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope js -->
<script src="<?= base_url() ?>public/front-web/js/isotope.pkgd.min.js"></script>
<!-- Imagesloaded js -->
<script src="<?= base_url() ?>public/front-web/js/imagesloaded.pkgd.min.js"></script>
<!-- Mixitup js -->
<script src="<?= base_url() ?>public/front-web/js/jquery.mixitup.min.js"></script>
<!-- Countdown -->
<script src="<?= base_url() ?>public/front-web/js/jquery.countdown.min.js"></script>
<!-- Counterup -->
<script src="<?= base_url() ?>public/front-web/js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script src="<?= base_url() ?>public/front-web/js/waypoints.min.js"></script>
<!-- Barrating -->
<script src="<?= base_url() ?>public/front-web/js/jquery.barrating.min.js"></script>
<!-- Jquery-ui -->
<script src="<?= base_url() ?>public/front-web/js/jquery-ui.min.js"></script>
<!-- Venobox -->
<script src="<?= base_url() ?>public/front-web/js/venobox.min.js"></script>
<!-- Nice Select js -->
<script src="<?= base_url() ?>public/front-web/js/jquery.nice-select.min.js"></script>
<!-- ScrollUp js -->
<script src="<?= base_url() ?>public/front-web/js/scrollUp.min.js"></script>
<!-- Main/Activator js -->
<script src="<?= base_url() ?>public/front-web/js/main.js"></script>
<!-- Notification by Toastr -->
<script src="<?= base_url() ?>public/plugins/notifications/toaster-2.1.4-7/toastr.min.js"></script>

<!-- Custom Page JS -->
<script src="<?= base_url() ?>public/build/js/global/function.js"></script>
<script src="<?= base_url() ?>public/build/js/global/variable.js"></script>
<script src="<?= base_url() ?>public/build/js/global/function_pnotify.js"></script>
<script src="<?= base_url() ?>public/front-web/js/page/main.js"></script>
<script src="<?= base_url() ?>public/front-web/js/page/front-function.js"></script>
<script src="<?= base_url() ?>public/front-web/js/page/filter-search.js"></script>
<script src="<?= base_url() ?>public/front-web/js/page/modal-filter-search.js"></script>
<script src="<?= base_url() ?>public/front-web/js/page/my-property-list-main.js"></script>
<script src="<?= base_url() ?>public/build/js/pages/front-login-function.js"></script>
<?php

    if($this->uri->segment(2) != 'my-property'){
        echo '<script src="'.base_url().'public/front-web/js/page/search.js"></script>';
    }else{
        echo '<script src="'.base_url().'public/front-web/js/page/search-my-property.js"></script>';
    }

    if (!empty($js_file)) {
        echo '<script type="module" src="' . base_url() . 'public/build/js/pages/' . $js_file . '.js"></script>';
    }
    // Not module type
    if (!empty($js_function_file)) {
        echo '<script src="' . base_url() . 'public/build/js/pages/' . $js_function_file . '.js"></script>';
    }
?>
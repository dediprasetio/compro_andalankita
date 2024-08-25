<!doctype html>
<html class="no-js" lang="zxx">

<!-- shop-left-sidebar31:47-->

<head>
    <?php
        $this->load->view('template/head_v');
    ?>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url() ?>public/front-web/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <?php
                $this->load->view('template/header_login_v');
            ?>
        </header>
        <!-- Header Area End Here -->
        <!-- Begin Li's Breadcrumb Area -->
        <!-- <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="<?= base_url() ?>public/front-web/index.html">Home</a></li>
                            <li class="active">Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        <!-- Li's Breadcrumb Area End Here -->
        <!-- Begin Li's Content Wraper Area -->
        <div class="content-wraper pt-35 pb-60 pt-sm-30">
            <div class="container">
                <div class="row">
                    <?php
                        !empty($content) ? $this->load->view($content) : ''
                    ?>
                    <?php
                        // $this->load->view('template/sidebar_v');
                    ?>
                </div>
            </div>
        </div>
        <!-- Content Wraper Area End Here -->
        <!-- Begin Footer Area -->
        <?php
            $this->load->view('template/footer_v');
        ?>
        <!-- Footer Area End Here -->
        <!-- Begin Quick View | Modal Area -->
        <?php
            $this->load->view('template/modal_example_v');
        ?>
        <!-- Quick View | Modal Area End Here -->
    </div>
    <!-- Body Wrapper End Here -->
    <?php
        $this->load->view('template/plugins_v');
    ?>
</body>

<!-- shop-left-sidebar31:48-->

</html>
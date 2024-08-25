<!-- Begin Header Top Area -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- Begin Header Top Left Area -->
            <div class="col-lg-3 col-md-4">
                <div class="header-top-left">
                    <ul class="phone-wrap">
                        <li><span>Permintaan Telepon:</span><a href="<?= base_url() ?>public/front-web/#">(+123) 123 321 345</a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Top Left Area End Here -->
            <!-- Begin Header Top Right Area -->
            <div class="col-lg-9 col-md-8">
                <div class="header-top-right">
                    <ul class="ht-menu">
                        <!-- Begin Setting Area -->
                        <li>
                        <a href="<?= base_url() ?>home/login" class="text-black"><small>Login Akun</small></a>
                            <!-- <div class="ht-setting-trigger"><span>Setting</span></div>
                            <div class="setting ht-setting">
                                <ul class="ht-setting-list">
                                    <li><a href="<?= base_url() ?>public/front-web/login-register.html">My Account</a></li>
                                    <li><a href="<?= base_url() ?>public/front-web/login-register.html">Sign In</a></li>
                                </ul>
                            </div> -->
                        </li>
                        <!-- Setting Area End Here -->
                        <!-- Begin Currency Area -->
                        <li>
                            <span class="currency-selector-wrapper">Website</span>
                            <div class=""><span><a href="<?= base_url() ?>public/front-web/#">Eagle Tree</a></span></div>
                        </li>
                        <!-- Currency Area End Here -->
                    </ul>
                </div>
            </div>
            <!-- Header Top Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Top Area End Here -->
<!-- Begin Header Middle Area -->
<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
    <div class="container">
        <div class="row">
            <!-- Begin Header Logo Area -->
            <div class="col-lg-3">
                <div class="logo pb-sm-30 pb-xs-30">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>public/front-web/./images/logo/logo.png" alt="" style="margin-top: -15px; margin-bottom: -15px;">
                        <!-- <h1 class="font-weight-bold"><span style="color: #F39C11;">EAGLE</span><span class="h3" style="color: #14BAB0;"> TREE</span></h1>
                                        <p style="margin-bottom: -20px; margin-top: -8px; letter-spacing: 1.5px;">Find your property</p> -->
                    </a>
                </div>
            </div>
            <!-- Header Logo Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                <div id="suggest-container">
                    <form class="hm-searchbox" id="form-search" action="#">
                        <select class="nice-select select-search-category" disabled id="form-search-cities">
                            <option value="">Semua</option>
                            <?php
                                foreach($data['cities'] as $row){
                                    echo '<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>';
                                }
                            ?>
                        </select>
                        <input type="text" id="form-search-input" autocomplete="off" disabled placeholder="Masukan kata kunci ...">
                        <div id="instant-results" class="card instant-results nonactive">
                            <div class="card-body" id="list-recomendation">
                                <!-- List recomendation -->
                            </div>
                        </div>
                        <button class="li-btn" id="btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Begin Header Middle Right Area -->
                <div class="header-middle-right">
                    <ul class="hm-menu">
                        <!-- Begin Header Mini Cart Area -->
                        <li class="hm-minicart">
                            <div class="hm-minicart-trigger" style="background-color: #14BAB0;">
                                <span class="item-icon"></span>
                                <span class="item-text">Daftar Properti Baru
                                    <span class="cart-item-count"><?= count($data['new_properties'])?></span>
                                </span>
                            </div>
                            <span></span>
                            <div class="minicart">
                                <ul class="minicart-product-list">
                                    <?php
                                        foreach($data['new_properties'] as $row){
                                            echo '<li>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="'.base_url().'home/property/'.$row['property_id'].'">'.$row['property_title'].'</a></h6>
                                                        <span class="text-secondary"><small>'.$row['area_name'].' | '.$row['city_name'].'</small></span>
                                                    </div>
                                                </li>';
                                        }
                                    ?>
                                </ul>
                                <!-- <p class="minicart-total">Showing: <span>1 dari 100</span></p>
                                                <div class="minicart-button">
                                                    <a href="<?= base_url() ?>public/front-web/#" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Lihat Semua</span>
                                                    </a>
                                                </div> -->
                            </div>
                        </li>
                        <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
</div>
<!-- Header Middle Area End Here -->
<!-- Begin Header Bottom Area -->
<div class="header-bottom mb-0 header-sticky stick d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <?php
                            foreach ($data['asset_categories'] as $row) {
                                $url = strtolower($row['asset_category_name']);
                                echo '<li><a href="' . base_url() . 'home/category/' . $url . '">' . $row['asset_category_name'] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End Here -->
<!-- Begin Mobile Menu Area -->
<div class="mobile-menu-area d-lg-none d-xl-none col-12">
    <div class="container">
        <div class="row">
            <div class="mobile-menu">
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End Here -->
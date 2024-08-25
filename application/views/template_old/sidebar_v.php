<div class="col-lg-3 order-2 order-lg-1">
    <div class="sidebar-categores-box mt-sm-30 mt-xs-30 d-none" id="sidebar-agent-profile">
        <div class="text-center card-box">
            <div class="member-card pt-2 pb-2">
                <div class="thumb-lg member-thumb mx-auto" id="sidebar-profile-image"></div>
                <div class="">
                    <h4 id="sidebar-full-name"></h4>
                    <p class="text-muted"> <span id="sidebar-id-card"> </span><span> | <a href="javascript:void(0)" class="text-pink">Agen Properti</a></span></p>
                </div>
                <ul class="social-links list-inline">
                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="modal" data-target="#modal-change-email" class="tooltips" href="javascript:void(0)" data-original-title="E-mail"><i class="fa fa-envelope mt-1"></i></a></li>
                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="modal" data-target="#modal-change-phone" class="tooltips" href="javascript:void(0)" data-original-title="No. Telepon"><i class="fa fa-mobile mt-1"></i></a></li>
                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="modal" data-target="#modal-change-photo" class="tooltips" href="javascript:void(0)" data-original-title="Foto Profil"><i class="fa fa-picture-o mt-1"></i></a></li>
                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="modal" data-target="#modal-change-password" class="tooltips" href="javascript:void(0)" data-original-title="Password"><i class="fa fa-key mt-1"></i></a></li>
                    <?php
                    //LOAD MODAL FORM
                    $this->load->view('template/modal_form_v');
                    ?>
                </ul>
                <!-- <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button> -->
            </div>
        </div>
    </div>
    <!--sidebar-categores-box start  -->
    <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
        <div class="sidebar-title">
            <h2>Kategori Penjualan</h2>
        </div>
        <div class="category-sub-menu">
            <ul>
                <li><a href="<?= base_url() ?>home/sale-type/sale" class="text-black">Properti Dijual</a></li>
                <li><a href="<?= base_url() ?>home/sale-type/rent" class="text-black">Properti Disewakan</a></li>
            </ul>
        </div>
    </div>
    <!--sidebar-categores-box end  -->
    <!--sidebar-categores-box start  -->
    <div class="sidebar-categores-box">
        <div class="sidebar-title">
            <h2>Filter Properti</h2>
        </div>

        <form action="" id="form-filter" name="form-filter">
            <!-- btn-clear-all start -->
            <!-- <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button> -->
            <!-- btn-clear-all end -->
            <!-- filter-sub-area start -->
            <div class="filter-sub-area">
                <h5 class="filter-sub-titel">JENIS PROPERTY</h5>
                <div class="categori-checkbox">
                    <ul>
                        <?php
                        foreach ($data['property_count_by_category'] as $row) {
                            echo '<li><input type="checkbox" name="category[]" value="' . $row['asset_category_name'] . '"><a href="javascript:void(0)">' . $row['asset_category_name'] . ' (' . $row['total_property'] . ')</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- filter-sub-area end -->
            <!-- filter-sub-area start -->
            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                <h5 class="filter-sub-titel">Luas Tanah</h5>
                <div class="categori-checkbox">
                    <ul>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="land_area" value="1">
                            <label class="form-check-label">
                                > 1.000 m<sup>2</sup>
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="land_area" value="2">
                            <label class="form-check-label">
                                500 - 1000 m<sup>2</sup>
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="land_area" value="3">
                            <label class="form-check-label">
                                250 - 500 m<sup>2</sup>
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="land_area" value="4">
                            <label class="form-check-label">
                                100 - 200 m<sup>2</sup>
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="land_area" value="5">
                            <label class="form-check-label">
                                < 100 m<sup>2</sup>
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="land_area" checked value="0">
                            <label class="form-check-label">
                                Semua
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- filter-sub-area end -->
            <!-- filter-sub-area start -->
            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                <h5 class="filter-sub-titel">Harga Jual</h5>
                <div class="size-checkbox">
                    <ul>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="price" value="1">
                            <label class="form-check-label">
                                > 10 M
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="price" value="2">
                            <label class="form-check-label">
                                5 M - 10 M
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="price" value="3">
                            <label class="form-check-label">
                                2,5 M - 5 M
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="price" value="4">
                            <label class="form-check-label">
                                1 M - 2,5 M
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" value="5">
                            <label class="form-check-label">
                                < 1 M </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="price" checked value="0">
                            <label class="form-check-label">
                                Semua</label>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- filter-sub-area end -->
            <!-- filter-sub-area start -->
            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                <h5 class="filter-sub-titel">Kamar Tidur</h5>
                <div class="size-checkbox">
                    <ul>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="bedroom" value="1">
                            <label class="form-check-label">
                                1
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="bedroom" value="2">
                            <label class="form-check-label">
                                2
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="bedroom" value="3">
                            <label class="form-check-label">
                                3
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="bedroom" value="4">
                            <label class="form-check-label">
                                4
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="bedroom" value="5">
                            <label class="form-check-label">
                                > 5
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="bedroom" value="0" checked>
                            <label class="form-check-label">
                                Semua
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- filter-sub-area end -->
            <?php
                //Add form input my property when you are on my property page
                if($this->uri->segment(2) == 'my-property'){
                    echo '<input class="form-input input-my-property" type="hidden" name="my_property" value="0" checked>';
                }
            ?>
            <div class="border-top mb-3"></div>
            <button class="btn btn-primary btn-sm btn-info" type="submit">Terapkan Filter</button>
        </form>
    </div>
    <!--sidebar-categores-box end  -->
    <!-- category-sub-menu start -->
    <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
        <div class="sidebar-title">
            <h2>Tags</h2>
        </div>
        <div class="category-tags">
            <ul>
                <?php
                foreach ($data['tags'] as $row) {
                    echo '<li><a href="' . base_url() . 'home/tag/' . strtolower($row['tag_name']) . '">' . $row['tag_name'] . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <!-- category-sub-menu end -->
    </div>
</div>
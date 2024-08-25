<div class="col-lg-9 order-1 order-lg-2">
    <!-- shop-top-bar start -->
    <div class="shop-top-bar">
        <div class="shop-bar-inner">
            <div class="product-view-mode">
                <!-- shop-item-filter-list start -->
                <ul class="nav shop-item-filter-list" role="tablist">
                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="<?= base_url() ?>public/front-web/#grid-view"><i class="fa fa-th"></i></a></li>
                    <!-- <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="<?= base_url() ?>public/front-web/#list-view"><i class="fa fa-th-list"></i></a></li> -->
                    <li class="active" title="Filter" role="presentation"><a aria-selected="true" class="active show" aria-controls="grid-view" href="javascript:void(0)" data-toggle="modal" data-target="#filter-modal"><i class="fa fa-filter" aria-hidden="true"></i></i></a></li>
                </ul>
                <!-- shop-item-filter-list end -->
            </div>
            <div class="toolbar-amount">
                <span class="showing-rows">Ditampilkan 0 dari 0 properti</span>
            </div>
        </div>
        <!-- product-select-box start -->
        <div class="product-select-box">
            <div class="product-short">
                <p id="content-title">Semua daftar properti</p>
            </div>
        </div>
        <!-- product-select-box end -->
    </div>
    <!-- shop-top-bar end -->
    <!-- shop-products-wrapper start -->
    <div class="shop-products-wrapper">
        <div class="tab-content">
            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                <div class="product-area shop-product-area">
                    <div class="row" id="property-list">
                        <!-- Property List -->
                    </div>
                </div>
            </div>
            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                <!-- You can add and use list-view here -->
            </div>
            <div class="paginatoin-area">
                <div class="row">
                    <div class="col-lg-6 col-md-6 pt-xs-15">
                        <p class="showing-rows">Ditampilkan 0 dari 0 properti</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="pagination-box pt-xs-20 pb-xs-15" id="paging-collection">
                            <!-- Pagination Here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-products-wrapper end -->
</div>

<!-- Modal -->
<div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" id="modal-form-filter" name="modal-form-filter">
                <div class="modal-header">
                    <h6 class="modal-title">FILTER PROPERTY</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- btn-clear-all start -->
                    <!-- <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button> -->
                    <!-- btn-clear-all end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area">
                        <h6 class="filter-sub-titel text-secondary">Jenis Properti</h6>
                        <div class="categori-checkbox">
                            <ul>
                                <?php
                                foreach ($data['property_count_by_category'] as $row) {
                                    echo '<li><input type="checkbox" name="category[]" value="' . $row['asset_category_name'] . '"><a href="' . base_url() . '">' . $row['asset_category_name'] . ' (' . $row['total_property'] . ')</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h6 class="filter-sub-titel text-secondary text-secondary">Luas Tanah</h6>
                        <div class="categori-checkbox">
                            <ul>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="land_area" id="land_area1" value="1">
                                    <label class="form-check-label" for="land_area1">
                                        > 1.000 m<sup>2</sup>
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="land_area" id="land_area2" value="2">
                                    <label class="form-check-label" for="land_area2">
                                        500 - 1000 m<sup>2</sup>
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="land_area" id="land_area3" value="3">
                                    <label class="form-check-label" for="land_area3">
                                        250 - 500 m<sup>2</sup>
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="land_area" id="land_area4" value="4">
                                    <label class="form-check-label" for="land_area4">
                                        100 - 200 m<sup>2</sup>
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="land_area" id="land_area5" value="5">
                                    <label class="form-check-label" for="land_area5">
                                        < 100 m<sup>2</sup>
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="land_area" id="land_area6" checked value="0">
                                    <label class="form-check-label" for="land_area6">
                                        Semua
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h6 class="filter-sub-titel text-secondary">Harga Jual</h6>
                        <div class="size-checkbox">
                            <ul>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="price" id="price1" value="1">
                                    <label class="form-check-label" for="price1">
                                        > 10 M
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="price" id="price2" value="2">
                                    <label class="form-check-label" for="price2">
                                        5 M - 10 M
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="price" id="price3" value="3">
                                    <label class="form-check-label" for="price3">
                                        2,5 M - 5 M
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="price" id="price4" value="4">
                                    <label class="form-check-label" for="price4">
                                        1 M - 2,5 M
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="price" id="price5" value="5">
                                    <label class="form-check-label" for="price5">
                                        < 1 M </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="price" id="price6" checked value="0">
                                    <label class="form-check-label" for="price6">
                                        Semua</label>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h6 class="filter-sub-titel text-secondary">Kamar Tidur</h6>
                        <div class="size-checkbox">
                            <ul>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="bedroom" id="bedroom1" value="1">
                                    <label class="form-check-label" for="bedroom1">
                                        1
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="bedroom" id="bedroom2" value="2">
                                    <label class="form-check-label" for="bedroom2">
                                        2
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="bedroom" id="bedroom3" value="3">
                                    <label class="form-check-label" for="bedroom3">
                                        3
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="bedroom" id="bedroom4" value="4">
                                    <label class="form-check-label" for="bedroom4">
                                        4
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="bedroom" id="bedroom5" value="5">
                                    <label class="form-check-label" for="bedroom5">
                                        > 5
                                    </label>
                                </div>
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="bedroom" id="bedroom6" value="0" checked>
                                    <label class="form-check-label" for="bedroom6">
                                        Semua
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-sm " data-dismiss="modal">Tutup</button>
                    <button class="btn btn-primary btn-sm btn-info" type="submit">Terapkan Filter</button>
                </div>
            </form>
        </div>
    </div>
</div>
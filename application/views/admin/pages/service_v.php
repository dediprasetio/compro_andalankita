<!-- <script src="<?= base_url() ?>public/build/js/pages/form_wizard.js"></script> -->
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="card">

            <div class="card-body">
                <div class="col-12">
                    <h6 class="font-weight-bold text-secondary">Buat Transaksi dan Layanan</h6>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <form action="#" class="form-horizontal" name="add-transaction" id="add-transaction">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="form-group">
                                <label>Pilih properti</label>
                                <select data-placeholder="Pilih properti" id="option_property" name="property_id" class="form-control select" data-fouc>
                                    <!-- List Property -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="form-group">
                                <label>Pilih Customer </label>
                                <br><small class="text-warning">*Pilih cutomer, jika cutomer belum terdaftar maka tambahkan pada tombol tambah. </small>
                                <div class="row">
                                    <div class="col-10">
                                        <select data-placeholder="Pilih customer" id="option_customer" name="customer_id" class="form-control select" data-fouc>
                                            <!-- List Property -->
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-outline-info" id="btn-modal-add-customer"><i class="icon-file-plus2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="form-group">
                                <small class="text-info">Masukan deskripsi terkait transaksi. </small>
                                <textarea rows="3" cols="3" class="form-control form-control-sm" placeholder="Deskripsi " name="description" spellcheck="false"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-info" id="btn-preview"><i class="icon-lan3 mr-2"></i>Tinjau Detail</button>
                            <button type="submit" class="btn bg-blue"><i class="icon-file-text3 mr-2"></i>Kirim Formulir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Directory -->

        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold mt-2 bg-indigo-400 p-2 font-weight-bold"><i class="icon-city mr-2"></i> Tentang Properti</h6>
                            <div class="dropdown-divider mb-2"></div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Informasi Utama</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <textarea rows="3" cols="3" class="form-control form-control-sm" disabled placeholder="Deskripsi properti..." id="property_description" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="additional_detail" disabled placeholder="Deskripsi tambahan LT, LB, KT, KM">
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control" disabled placeholder="Tipe Properti" id="property_category">
                                                <div class="form-control-feedback">
                                                    <i class="icon-ticket"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control bg-info text-white" disabled placeholder="Jenis Properti"  id="sale_type">
                                                <div class="form-control-feedback form-control-feedback-lg">
                                                    <i class="icon-strategy"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Alamat Properti</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <textarea rows="3" cols="3" class="form-control form-control-sm" disabled placeholder="Alamat property | Blok" id="address" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control" id="city" disabled placeholder="Kota">
                                                <div class="form-control-feedback">
                                                    <i class="icon-city"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" disabled placeholder="Wilayah" id="area">
                                                <div class="form-control-feedback form-control-feedback-lg">
                                                    <i class="icon-feed"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Harga & Fee</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control bg-info text-white" disabled placeholder="Harga" id="price">
                                                <div class="form-control-feedback">
                                                    <i class="icon-coins"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" disabled placeholder="Fee(%)" id="fee">
                                                <div class="form-control-feedback form-control-feedback-lg">
                                                    <i class="icon-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <h6 class="font-weight-semibold mt-2 bg-pink-400 p-2 font-weight-bold"><i class="icon-credit-card2 mr-2"></i>Pemilik & Agen</h6>
                            <div class="dropdown-divider mb-2"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Agen Properti:</label>
                                    <input type="text" placeholder="Agen Properti" disabled class="form-control" id="agent">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Pemilik Properti:</label>
                                    <input type="text" placeholder="Pemilik Properti" disabled class="form-control" id="owner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /directory -->
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <!-- Property Right Content -->
        <?php
        $this->load->view('admin/pages/property/property_right_content_v');
        ?>
        <!-- End Property Right Content -->
    </div>
</div>

<!-- Modal Add -->
<div id="modal_form_add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM TAMBAH CUSTOMER</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add-customer" id="add-customer">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="customer_full_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">No Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="customer_phone_number">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-primary">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Add -->
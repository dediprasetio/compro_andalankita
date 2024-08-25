<div id="section-add">
    <form class="wizard-form steps-add-property" id="add-property" action="#" data-fouc>
        <h6>Formulir Utama</h6>
        <fieldset>

            <div class="row">
                <div class="col-12">
                    <h6 class="font-weight-bold text-secondary">tentang properti</h6>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="form-group">
                        <label>Judul Properti:</label>
                        <br><small class="text-warning">*Masukan judul properti sesuai tema properti untuk mempermudah penamaan unit. </small>
                        <input type="text" placeholder="" class="form-control" name="property_title">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Tipe Properti:</label>
                        <br><small class="text-warning">*Silahkan pilih tipe penjualan properti</small>
                        <select name="asset_category_id" data-placeholder="Pilih Tipe Properti" class="form-control">
                            <option value="">-- Pilih Tipe Properti --</option>
                            <?php
                            foreach ($data['asset_categories'] as $row) {
                                echo '<option value="' . $row['asset_category_id'] . '">' . $row['asset_category_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Tipe Penjualan:</label>
                        <br><small class="text-warning">*Silahkan pilih tipe penjualan properti</small>
                        <select name="sale_type" data-placeholder="Pilih Tipe Penjualan" class="form-control">
                            <option value="">-- Pilih Tipe Penjualan --</option>
                            <option value="Sewa">Sewa</option>
                            <option value="Jual">Jual</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Tag Properti:</label>
                        <br><small class="text-warning">*Pilih tag properti anda</small>
                        <select name="tag_code" data-placeholder="Pilih Tag" class="form-control option_tags">
                        </select>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi Properti:</label>
                        <textarea rows="3" cols="3" class="form-control" placeholder="Deskripsi properti..." name="property_description"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6>Alamat Properti</h6>
        <fieldset>
            <div class="row">
                <div class="col-12">
                    <h6 class="font-weight-bold text-secondary">alamat</h6>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Nomor Unit | Blok:</label>
                        <input type="text" placeholder="Ex: No. 50 Blok G" class="form-control" name="unit_number">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Alamat Properti:</label>
                        <textarea rows="3" cols="3" class="form-control" name="address" placeholder=""></textarea>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="form-group">
                        <label>Kota:</label>
                        <br><small class="text-warning">*Silahkan pilih kota untuk menampilkan area</small>
                        <select name="city_id" data-placeholder="Pilih Kota" class="form-control cities-form-add">
                            <option value="">-- Pilih Kota --</option>
                            <?php
                            foreach ($data['cities'] as $row) {
                                echo '<option value="' . $row['city_id'] . '">' . $row['city_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Area Properti:</label>
                        <select name="area_id" data-placeholder="Pilih Tipe Penjualan" class="form-control area-form-add">
                            <option value="">-- Pilih Area Properti --</option>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6>Detail & Harga</h6>
        <fieldset>
            <div class="row">
                <div class="col-12">
                    <h6 class="font-weight-bold text-secondary">detail properti</h6>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Harga: <span class="text-danger">*</span></label>
                        <input type="text" name="price" placeholder="" pattern="^\Rp\d{1,3}(,\d{3})*(\.\d+)?Rp" data-type="currency" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>LT:</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="number" name="land_area" placeholder="Luas Tanah" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group bg-teal-400 text-center">
                                        <label for="" class="mt-1">m<sup>2</sup></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>LB:</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="number" name="building_area" placeholder="Luas Bangunan" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group bg-teal-400 text-center">
                                        <label for="" class="mt-1">m<sup>2</sup></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>KT:</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="number" name="bedroom" placeholder="Kamar Tidur" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group bg-slate-400 text-center">
                                        <label for="" class="mt-1">jml</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>KM:</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="number" name="bathroom" placeholder="Kamar Mandi" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group bg-slate-400 text-center">
                                        <label for="" class="mt-1">jml</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6>Pemilik & Agen</h6>
        <fieldset>
            <div class="row">
                <div class="col-12">
                    <h6 class="font-weight-bold text-secondary">Agen</h6>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Agen Properti:</label>
                        <br><small class="text-warning">*Silahkan pilih agen untuk properti ini</small>
                        <select name="agent_id" data-placeholder="Pilih Agen" class="form-control">
                            <option value="">-- Pilih Agen --</option>
                            <?php
                            foreach ($data['agents'] as $row) {
                                echo '<option value="' . $row['user_id'] . '">' . $row['user_full_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Fee (%)</label>
                        <br><small class="text-warning">*Biaya untuk penjualan / sewa yang diterima agen</small>
                        <input type="number" placeholder="" class="form-control" name="fee">
                    </div>
                </div>
                <div class="col-12">
                    <h6 class="font-weight-bold text-secondary">Pemilik Properti</h6>
                    <hr style="width:100%;text-align:left;margin-left:0">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Pemilik Properti:</label>
                        <br><small class="text-warning">*Silahkan pilih kota untuk menampilkan area</small>
                        <select name="owner_id" data-placeholder="" class="form-control">
                            <option value="">-- Pilih Pemilik Properti --</option>
                            <?php
                            foreach ($data['owner'] as $row) {
                                echo '<option value="' . $row['owner_id'] . '">' . $row['owner_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-md-8">
                <div class="form-group">
                    <label>Alamat Pemilik Properti:</label>
                    <textarea rows="3" cols="3" class="form-control" placeholder="Tidak wajib diisi readonly" name="address"></textarea>
                </div>
            </div> -->
            </div>
        </fieldset>
    </form>
</div>
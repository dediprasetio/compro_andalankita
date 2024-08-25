<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12">
        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="text-teal font-weight-bold">Konfigurasi Perusahaan</h5>
            </div>
            <div class="card-body">
                <form action="#" class="form-horizontal" name="edit-company" id="edit-company">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Double U Steak" class="form-control disabled" disabled value="<?= $data['my_company']->company_name ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">E-Mail</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="email" value="<?= $data['my_company']->email ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="ex: 085711111111" class="form-control" name="phone_number" value="<?= $data['my_company']->phone_number ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Address</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="address"><?= $data['my_company']->address ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Address Map</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="You don't have to fill" name="address"><?= $data['my_company']->url_maps ?></textarea>
                        </div>
                    </div>
                    
                    <hr>
                    <h6 class="text-teal">Social Media</h6>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-12"><small class="text-warning">**Masukan URL media sosial terkait perusahaan atau kosongkan. Contoh: https://www.facebook.com/hana</small></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Twitter</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="url_twitter" value="<?= $data['my_company']->url_twitter ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Google Plus</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="url_google_plus" value="<?= $data['my_company']->url_google_plus ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Facebook</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="url_facebook" value="<?= $data['my_company']->url_facebook ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Youtube</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="url_youtube" value="<?= $data['my_company']->url_youtube ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="url_instagram" value="<?= $data['my_company']->url_instagram ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
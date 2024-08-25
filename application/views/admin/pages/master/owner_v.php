<div class="card card-body">
    <div class="media align-items-center align-items-md-start flex-column flex-md-row">
        <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
            <i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
        </a>

        <div class="media-body text-center text-md-left">
            <h6 class="media-title font-weight-semibold">Diperlukan untuk menambahkan pemilik?</h6>
            Anda dapat menambahkan pemilik kapan saja sesuai jenis kepemilikan yang bersangkutan.
        </div>

        <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Tambahkan Pengguna Baru</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title text-teal font-weight-bold">Pemilik Properti</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-owner">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Jenis kepemilikan</th>
                        <th>Foto</th>
                        <th>Nama Pemilik</th>
                        <th>Kartu Identitas / No. Perusahaan</th>
                        <th>Penghubung</th>
                        <th>Alamat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table-body-owner">

                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
</div>

<!-- Modal Update Photo -->
<div id="modal_form_edit_foto" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM UBAH FOTO</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="update-foto-owner" id="add-owner">
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Foto</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="owner_id" id="update_foto_owner_id">
                            <input type="file" class="form-control h-auto" name="owner_photo">
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
<!-- Modal Update Photo -->

<!-- Modal Add -->
<div id="modal_form_add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM TAMBAH PEMILIK PROPERTI</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add-owner" id="add-owner">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="owner_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis Owner</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="owner_type">
                                <option value="Perorangan">Perorangan</option>
                                <option value="Perusahaan">Perusahaan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control h-auto" name="owner_photo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">ID Owner / No. Perusahaan</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="11011101111" class="form-control" name="id_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis ID</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="id_number_type">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nomor Telp.</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="085711112121" class="form-control" name="owner_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="hana2022@mail.com" class="form-control" name="owner_email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Alamat</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Tidak wajib diisi" name="address"></textarea>
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

<!-- Modal Edit -->
<div id="modal_form_edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="edit-owner" id="edit-owner">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="owner_id" id="owner_id">
                            <input type="text" placeholder="" class="form-control" name="owner_name" id="owner_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis Owner</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="owner_type" id="owner_type">
                                <option value="Perorangan">Perorangan</option>
                                <option value="Perusahaan">Perusahaan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">ID Owner / No. Perusahaan</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="11011101111" class="form-control" name="id_number" id="id_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Jenis ID</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="id_number_type" id="id_number_type">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nomor Telp.</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="085711112121" class="form-control" name="owner_phone_number" id="owner_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="hana2022@mail.com" class="form-control" name="owner_email" id="owner_email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Alamat</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Tidak wajib diisi" name="address" id="address"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-primary">Submit form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->
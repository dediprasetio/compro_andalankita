<div class="card card-body">
    <div class="media align-items-center align-items-md-start flex-column flex-md-row">
        <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
            <i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
        </a>

        <div class="media-body text-center text-md-left">
            <h6 class="media-title font-weight-semibold">Diperlukan untuk membuat akses dengan pengguna baru?</h6>
            Anda dapat menambahkan pengguna kapan saja sesuai tingkatan yang dibutuhkan untuk digunakan.
        </div>

        <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Tambahkan Pengguna Baru</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title text-teal font-weight-bold">Pengguna & Tanggung Jawab</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-user">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tingkatan</th>
                        <th>Foto</th>
                        <th>Pengguna & Penanggungjawab</th>
                        <th>ID Pengguna</th>
                        <th>Penghubung</th>
                        <th>Status Pengguna</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table-body-user">

                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
</div>

<!-- Modal Update Password -->
<div id="modal_form_edit_password" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM UBAH FOTO</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="update-password-user" id="update-password-user">
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Kata Sandi</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="user_id" id="update_password_user_id">
                            <input type="password" placeholder="Masukan kata sandi yang sulit ditebak" class="form-control" name="password">
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
<!-- Modal Update Password -->

<!-- Modal Update Photo -->
<div id="modal_form_edit_foto" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM UBAH FOTO</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="update-foto-user" id="update-foto-user">
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Foto</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="user_id" id="update_foto_user_id">
                            <input type="file" class="form-control h-auto" name="photo">
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
                <h5 class="modal-title text-teal">FORM TAMBAH PENGGUNA BARU</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add-user" id="add-user">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama <br><sub class="text-warning">(Harus sama dengan group)</sub></label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Hana" class="form-control" name="user_full_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Hana Az.." class="form-control" name="user_fullname">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="hana2022.." class="form-control" name="user_name">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Kata Sandi</label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="Masukan kata sandi yang sulit ditebak" class="form-control" name="password">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">ID Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="11011101111" class="form-control" name="id_card">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control h-auto" name="photo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="hana2022@mail.com" class="form-control" name="user_email">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nomor Telp.</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="085711112121" class="form-control" name="user_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Tingkat Pengguna</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="user_level_id">
                                <option value="">-- Pilih Tingkatan --</option>
                                <option value="1">Admin</option>
                                <option value="2">Group</option>
                                <option value="3">Agen</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Status Pengguna</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status">
                                <option value="">-- Pilih Status Pengguna --</option>
                                <option value="active">Aktif</option>
                                <option value="nonactive">Tidak Aktif</option>
                            </select>
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

            <form action="#" class="form-horizontal" name="edit-user" id="edit-user">
                    <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama <br><sub class="text-warning">(Harus sama dengan group)</sub></label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="user_id" id="user_id">
                            <input type="text" placeholder="Hana" class="form-control" name="user_full_name" id="user_full_name">
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Hana Az.." class="form-control" name="user_fullname" id="user_fullname">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="hana2022.." class="form-control" name="user_name" id="user_name">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">ID Pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="11011101111" class="form-control" name="id_card" id="id_card">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="hana2022@mail.com" class="form-control" name="user_email" id="user_email">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nomor Telp.</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="085711112121" class="form-control" name="user_phone_number" id="user_phone_number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Tingkat Pengguna</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="user_level_id" id="user_level_id">
                                <option value="">-- Pilih Tingkatan --</option>
                                <option value="1">Admin</option>
                                <option value="2">Group</option>
                                <option value="3">Agen</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Status Pengguna</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status" id="status">
                                <option value="">-- Pilih Status Pengguna --</option>
                                <option value="active">Aktif</option>
                                <option value="nonactive">Tidak Aktif</option>
                            </select>
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
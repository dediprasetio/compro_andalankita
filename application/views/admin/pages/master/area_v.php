<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <div class="card card-body">
            <div class="media align-items-center align-items-md-start flex-column flex-md-row">
                <a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
                    <i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
                </a>

                <div class="media-body text-center text-md-left">
                    <h6 class="media-title font-weight-semibold">Wilayah</h6>
                    Anda dapat menambahkan wilayah baru.
                </div>

                <button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_form_add"><i class="icon-add-to-list"></i> &nbsp; Tambahkan Wilayah</button>
            </div>
        </div>
        <!-- Invoice archive -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title text-teal font-weight-bold">Wilayah</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table table-lg table-area">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Wilayah</th>
                        <th>Kota</th>
                        <th>Deskripsi Area</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body-area">

                </tbody>
            </table>
        </div>
        <!-- /invoice archive -->
    </div>
</div>

<!-- Modal Add -->
<div id="modal_form_add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-teal">FORM TAMBAH WILAYAH</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="#" class="form-horizontal" name="add-area" id="add-area">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Wilayah</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="area_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Kota</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="city_id">
                                <option value="">-- Pilih Kota --</option>
                                <?php
                                    foreach($data['cities'] as $row){
                                        echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Tidak wajib diisi" name="area_description"></textarea>
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

            <form action="#" class="form-horizontal" name="edit-area" id="edit-area">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="hidden" placeholder="" class="form-control" name="area_id" id="area_id">
                            <input type="text" placeholder="" class="form-control" name="area_name" id="area_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Kota</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="city_id" id="city_id">
                                <option value="">-- Pilih Kota --</option>
                                <?php
                                    foreach($data['cities'] as $row){
                                        echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-sm-3">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Tidak wajib diisi" name="area_description" id="area_description"></textarea>
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